import ErrorPage from 'next/error'
import Head from 'next/head'
import { useRouter } from 'next/router'

import Container from '../../components/container'
import Header from '../../components/header'
import Layout from '../../components/layout'
import PostBody from '../../components/post-body'
import PostHeader from '../../components/post-header'
import PostTitle from '../../components/post-title'
import MeetupType from '../../interfaces/meetup'
import { getAllMeetups, getMeetupBySlug } from '../../lib/api'
import markdownToHtml from '../../lib/markdownToHtml'

type Props = {
  post: MeetupType
  morePosts: MeetupType[]
  preview?: boolean
}

export default function Post({ post, morePosts, preview }: Props) {
  const router = useRouter()
  if (!router.isFallback && !post?.slug) {
    return <ErrorPage statusCode={404} />
  }

  const postTitle = `${post.title} | PHP Portugal`

  return (
    <Layout preview={preview}>
      <Container>
        <Header />
        {router.isFallback ? (
          <PostTitle>Loading…</PostTitle>
        ) : (
          <>
            <article className="max-w-3xl mx-auto">
              <Head>
                <title>{postTitle}</title>
                <meta property="og:image" content={post.ogImage.url} />
              </Head>
              <PostHeader
                title={post.title}
                coverImage={post.coverImage}
                date={post.date}
              />
              <PostBody content={post.content} />
            </article>
          </>
        )}
      </Container>
    </Layout>
  )
}

type Params = {
  params: {
    slug: string
  }
}

export async function getStaticProps({ params }: Params) {
  const post = getMeetupBySlug(params.slug, [
    'title',
    'date',
    'slug',
    'author',
    'content',
    'ogImage',
    'coverImage',
  ])
  const content = await markdownToHtml(post.content || '')

  return {
    props: {
      post: {
        ...post,
        content,
      },
    },
  }
}

export async function getStaticPaths() {
  const posts = getAllMeetups(['slug'])

  return {
    paths: posts.map((post) => {
      return {
        params: {
          slug: post.slug,
        },
      }
    }),
    fallback: false,
  }
}

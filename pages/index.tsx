import Head from 'next/head'

import Container from '../components/container'
import HeroPost from '../components/hero-post'
import Intro from '../components/intro'
import Layout from '../components/layout'
import MoreStories from '../components/more-stories'
import Meetup from '../interfaces/meetup'
import { getAllMeetups } from '../lib/api'

type IndexPageProps = {
  allMeetups: Meetup[]
}

export default function Index({ allMeetups }: IndexPageProps) {
  const heroPost = allMeetups[0]
  const morePosts = allMeetups.slice(1)
  return (
    <>
      <Layout>
        <Head>
          <title>PHP Portugal - The PHP and Web Dev Meetup in Portugal</title>
        </Head>
        <Container>
          <Intro />

          <h2 className="my-8 text-5xl font-serif lg:text-7xl font-bold tracking-tighter leading-tight">
            Next Meetup
          </h2>

          {heroPost && (
            <HeroPost
              title={heroPost.title}
              coverImage={heroPost.coverImage}
              date={heroPost.date}
              slug={heroPost.slug}
              excerpt={heroPost.excerpt}
            />
          )}
          {morePosts.length > 0 && <MoreStories meetups={morePosts} />}
        </Container>
      </Layout>
    </>
  )
}

export const getStaticProps = async () => {
  const allMeetups = getAllMeetups([
    'title',
    'date',
    'slug',
    'author',
    'coverImage',
    'excerpt',
  ])

  return {
    props: { allMeetups },
  }
}

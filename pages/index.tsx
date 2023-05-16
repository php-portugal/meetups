import Head from 'next/head'

import Container from '../components/container'
import HeroPost from '../components/hero-post'
import Intro from '../components/intro'
import Layout from '../components/layout'
import MoreStories from '../components/more-stories'
import Meetup from '../interfaces/meetup'
import {getAllMeetups} from '../lib/api'

type IndexPageProps = {
  allMeetups: Meetup[]
}

export default function Index({allMeetups}: IndexPageProps) {
  const nextMeetups = allMeetups
    .filter((meetup) => {
      return (Date.now() - Date.parse(meetup.date)) < 0
    })
    .reverse()

  const morePosts = allMeetups
    .filter((meetup) => {
      return (Date.now() - Date.parse(meetup.date)) >= 0
    })
    .reverse()

  return <>
    <Layout>
      <Head>
        <title>PHP Portugal - The PHP and Web Dev Meetup in Portugal</title>
      </Head>
      <Container>
        <Intro/>

        <h2 className="my-8 text-5xl font-serif lg:text-7xl font-bold tracking-tighter leading-tight">
          Next Meetup(s)
        </h2>

        {
          nextMeetups && nextMeetups.map((meetup) => (
            <HeroPost
              key={meetup.slug}
              title={meetup.title}
              coverImage={meetup.coverImage}
              date={meetup.date}
              slug={meetup.slug}
              excerpt={meetup.excerpt}
            />
          ))
        }

        {morePosts.length > 0 && <MoreStories meetups={morePosts}/>}
      </Container>
    </Layout>
  </>
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
    props: {allMeetups},
  }
}

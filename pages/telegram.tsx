import Head from 'next/head'

import Container from '../components/container'
import HeroPost from '../components/hero-post'
import Intro from '../components/intro'
import Layout from '../components/layout'
import MoreStories from '../components/more-stories'
import Meetup from '../interfaces/meetup'
import { getAllMeetups } from '../lib/api'

export default function Index() {
  return (
    <>
      <Layout>
        <Head>
          <title>PHP Portugal - The PHP and Web Dev Meetup in Portugal</title>
        </Head>
        <Container>
          <Intro />


          <a className="flex flex-col items-center" href="https://t.me/+a1s1B-UyyhcxNWRk" target="_blank" rel="noreferrer">
            <img src="/assets/images/Telegram_Logo_PHPPortugal.png"/>
            <h2 className="my-8 text-xl font-serif lg:text-xl font-bold tracking-tighter leading-tight text-center">
              Click to join the Telegram PHP Portugal Group
            </h2>
          </a>

        </Container>
      </Layout>
    </>
  )
}

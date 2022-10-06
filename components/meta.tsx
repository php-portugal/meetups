import Head from 'next/head'

import { HOME_META_DESCRIPTION, HOME_OG_IMAGE_URL } from '../lib/constants'

const Meta = () => {
  return (
    <Head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name="msapplication-TileColor" content="#ffffff" />
      <meta name="theme-color" content="#fff" />
      <meta name="description" content={HOME_META_DESCRIPTION} />
      <meta property="og:image" content={HOME_OG_IMAGE_URL} />
    </Head>
  )
}

export default Meta

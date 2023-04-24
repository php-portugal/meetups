/** @type {import('next').NextConfig} */
const nextConfig = {
  reactStrictMode: true,
  swcMinify: true,
  async redirects() {
    return [
      // TODO: Delete `pages/telegram.tsx` when redirect works
      //
      // {
      //   source: '/telegram',
      //   destination: 'https://t.me/+a1s1B-UyyhcxNWRk',
      //   permanent: false,
      // },
      {
        source: '/leiria',
        destination: 'https://ijpatricio.notion.site/Road-to-PHP-Portugal-Meetup-8-6c3bba4a566449d3adcbac79d6f485fe',
        permanent: false,
      },
      {
        source: '/game',
        destination: 'https://forms.gle/mKYsTdLUkSWu8Bve8',
        permanent: false,
      },
    ]
  },
}

module.exports = nextConfig

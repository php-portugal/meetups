/** @type {import('next').NextConfig} */
const nextConfig = {
  reactStrictMode: true,
  swcMinify: true,
  async redirects() {
    return [
      {
        source: '/telegram',
        destination: 'https://t.me/%2BlcFZSTzTMwc3NjQ8',
        permanent: false,
      },
      {
        source: '/leiria',
        destination:
          'https://ijpatricio.notion.site/Road-to-PHP-Portugal-Meetup-8-6c3bba4a566449d3adcbac79d6f485fe',
        permanent: false,
      },
      {
        source: '/game',
        destination: 'https://forms.gle/mKYsTdLUkSWu8Bve8',
        permanent: false,
      },
      {
        source: '/ama',
        destination: 'https://forms.gle/kYTzKVGYHNYNKvN98',
        permanent: false,
      },
    ]
  },
}

module.exports = nextConfig

import Link from 'next/link'

const Header = () => {
  return (
    <h2 className="text-2xl font-serif md:text-4xl font-bold tracking-tight md:tracking-tighter leading-tight mb-8 mt-8">
      <Link href="/">
        <a className="hover:underline text-purple-900">$home</a>
      </Link>
    </h2>
  )
}

export default Header

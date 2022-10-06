import Link from 'next/link'

import CoverImage from './cover-image'
import DateFormatter from './date-formatter'

type HeroPostProps = {
  title: string
  coverImage: string
  date: string
  excerpt: string
  slug: string
}

const HeroPost = ({
  title,
  coverImage,
  date,
  excerpt,
  slug,
}: HeroPostProps) => {
  return (
    <section className="p-6 bg-white rounded-lg border border-gray-200 shadow-md">
      <div className="flex flex-col md:flex-row gap-6">
        <div className="md:basis-1/2 relative w-full h-64">
          <CoverImage
            className="rounded-md object-cover"
            title={title}
            src={coverImage}
            slug={slug}
          />
        </div>
        <div className="basis-1/2">
          <h3 className="mb-4 font-serif text-4xl lg:text-5xl leading-tight">
            <Link as={`/meetups/${slug}`} href="/meetups/[slug]">
              <a className="hover:underline text-purple-900">{title}</a>
            </Link>
          </h3>
          <DateFormatter className="text-gray-500" dateString={date} />
          <p className="text-lg leading-relaxed mb-4">{excerpt}</p>
        </div>
      </div>
    </section>
  )
}

export default HeroPost

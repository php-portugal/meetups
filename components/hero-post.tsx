import Link from 'next/link'

import CoverImage from './cover-image'
import DateFormatter from './date-formatter'
import { TBD } from '../lib/constants'

type HeroPostProps = {
  title: string
  coverImage: string
  date: string
  excerpt: string
  slug: string
}

type PostTitleProps = {
  date: string
  slug: string
  title: string
}

const RenderTitle = ({
  date,
  slug,
  title
}: PostTitleProps) => {
  if (date === TBD) {
    return (
      <h3 className="mb-4 font-serif text-4xl lg:text-5xl leading-tight text-purple-900">
        {title}
      </h3>
    )
  }

  return (
    <h3 className="mb-4 font-serif text-4xl lg:text-5xl leading-tight">
      <Link as={`/meetups/${slug}`} href="/meetups/[slug]">
        <a className="hover:underline text-purple-900">{title}</a>
      </Link>
    </h3>
  )
}

const HeroPost = ({
  title,
  coverImage,
  date,
  excerpt,
  slug,
}: HeroPostProps) => {
  return (
    <section className="my-16 bg-white rounded-lg border border-gray-200 shadow-md">
      <div className="flex flex-col md:flex-row gap-6">
        <div className="md:basis-1/2 relative w-full h-64">
          <CoverImage
            className="rounded-t-md md:rounded-l-md md:rounded-tr-none object-fit"
            title={title}
            src={coverImage}
            slug={date === TBD ? undefined : slug}
          />
        </div>
        <div className="basis-1/2 p-6">
          <RenderTitle date={date} slug={slug} title={title} />
          <DateFormatter className="text-gray-500" dateString={date} />
          <p className="text-lg leading-relaxed mb-4">{excerpt}</p>
        </div>
      </div>
    </section>
  )
}

export default HeroPost

import Link from 'next/link'

import CoverImage from './cover-image'
import DateFormatter from './date-formatter'

type PostPreviewProps = {
  title: string
  coverImage: string
  date: string
  excerpt: string
  slug: string
}

const PostPreview = ({
  title,
  coverImage,
  date,
  excerpt,
  slug,
}: PostPreviewProps) => {
  return (
    <div className="bg-white rounded-lg border">
      <div className="relative w-full h-64">
        <CoverImage
          slug={slug}
          className="rounded-t-lg object-cover"
          title={title}
          src={coverImage}
        />
      </div>
      <div className="p-5">
        <h3 className="text-3xl font-serif mb-3 leading-snug">
          <Link as={`/meetups/${slug}`} href="/meetups/[slug]">
            <a className="hover:underline text-purple-900">{title}</a>
          </Link>
        </h3>
        <div className="text-lg mb-4">
          <DateFormatter className="text-gray-500" dateString={date} />
        </div>
        <p className="text-lg leading-relaxed mb-4">{excerpt}</p>
      </div>
    </div>
  )
}

export default PostPreview

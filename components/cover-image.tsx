import cn from 'classnames';
import Image from 'next/image';
import Link from 'next/link';
import { CSSProperties } from 'react';


type CoverImageProps = {
  title: string
  src: string
  slug?: string
  className?: string
}

const CoverImage = ({ title, src, slug, className }: CoverImageProps) => {
  const image = (
    <Image
      layout="fill"
      src={src}
      priority
      sizes='(max-width: 600px) 100vw, (max-width: 1000px) 50vw, 33vw"'
      alt={`Cover Image for ${title}`}
      className={cn(
        {
          'hover:shadow-lg transition-shadow duration-200': slug,
        },
        className
      )}
    />
  )
  return (
    <div className="sm:mx-0">
      {slug ? (
        <Link as={`/meetups/${slug}`} href="/meetups/[slug]">
          <a aria-label={title}>{image}</a>
        </Link>
      ) : (
        image
      )}
    </div>
  )
}

export default CoverImage

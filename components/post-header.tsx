import CoverImage from './cover-image'
import DateFormatter from './date-formatter'
import PostTitle from './post-title'

type PostHeaderProps = {
  title: string
  coverImage: string
  date: string
}

const PostHeader = ({ title, coverImage, date }: PostHeaderProps) => {
  return (
    <>
      <PostTitle>{title}</PostTitle>
      <div className="mb-8 md:mb-16 sm:mx-0 relative w-full h-64">
        <CoverImage
          className="rounded-md object-cover left-0 m-auto"
          title={title}
          src={coverImage}
        />
      </div>
      <div className="mb-6 text-lg">
        <DateFormatter className="text-gray-500" dateString={date} />
      </div>
    </>
  )
}

export default PostHeader

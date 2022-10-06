import type Meetup from '../interfaces/meetup'
import PostPreview from './post-preview'

type MoreStoriesProps = {
  meetups: Meetup[]
}

const MoreStories = ({ meetups }: MoreStoriesProps) => {
  return (
    <section>
      <h2 className="mt-20 mb-8 text-5xl font-serif lg:text-7xl font-bold tracking-tighter leading-tight">
        Past Meetups
      </h2>
      <div className="grid grid-cols-1 md:grid-cols-2 md:gap-x-8 gap-y-12 md:gap-y-32 mb-32">
        {meetups.map((meetup) => (
          <PostPreview
            key={meetup.slug}
            title={meetup.title}
            coverImage={meetup.coverImage}
            date={meetup.date}
            slug={meetup.slug}
            excerpt={meetup.excerpt}
          />
        ))}
      </div>
    </section>
  )
}

export default MoreStories

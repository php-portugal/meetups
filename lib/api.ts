import fs from 'fs'
import matter from 'gray-matter'
import { join } from 'path'

const meetupsDirectory = join(process.cwd(), '_meetups')

export function getMeetupsSlug() {
  return fs.readdirSync(meetupsDirectory)
}

export function getMeetupBySlug(slug: string, fields: string[] = []) {
  const realSlug = slug.replace(/\.md$/, '')
  const fullPath = join(meetupsDirectory, `${realSlug}.md`)
  const fileContents = fs.readFileSync(fullPath, 'utf8')
  const { data, content } = matter(fileContents)

  type Items = {
    [key: string]: string
  }

  const items: Items = {}

  // Ensure only the minimal needed data is exposed
  fields.forEach((field) => {
    if (field === 'slug') {
      items[field] = realSlug
    }
    if (field === 'content') {
      items[field] = content
    }

    if (typeof data[field] !== 'undefined') {
      items[field] = data[field]
    }
  })

  return items
}

export function getAllMeetups(fields: string[] = []) {
  const slugs = getMeetupsSlug()
  const meetups = slugs
    .map((slug) => getMeetupBySlug(slug, fields))
    // sort meetups by date in descending order
    .sort((meetup1, meetup2) => (meetup1.date > meetup2.date ? -1 : 1))
  return meetups
}

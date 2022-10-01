import { format, parseISO } from 'date-fns'

type DateFormatterProps = {
  dateString: string
  className?: string
}

const DateFormatter = ({ dateString, className }: DateFormatterProps) => {
  const date = parseISO(dateString)
  return (
    <time className={className} dateTime={dateString}>
      {format(date, 'LLLL	d, yyyy')}
    </time>
  )
}

export default DateFormatter

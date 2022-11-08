import { format, parseISO } from 'date-fns'
import { TBD } from '../lib/constants'

type DateFormatterProps = {
  dateString: string
  className?: string
}

const DateFormatter = ({ dateString, className }: DateFormatterProps) => {
  if (dateString === TBD) {
    return (
      <time className={className} dateTime={dateString}>
        {dateString}
      </time>
    )
  }

  const date = parseISO(dateString)
  return (
    <time className={className} dateTime={dateString}>
      {format(date, 'LLLL	d, yyyy')}
    </time>
  )
}

export default DateFormatter

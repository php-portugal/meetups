<x-layout>
  <x-meetups
    title="Next Meetups"
    description="This will show the future meetups upcomming in Portugal."
    :meetups="$nextMeetups"
  />

  <x-meetups
    title="Past Meetups"
    description="This will show the past meetups that happened in Portugal."
    :meetups="$pastMeetups"
  />
</x-layout>

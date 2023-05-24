<x-layout>
  <x-meetups
    title="Next Meetups"
    :description="filled($nextMeetups) ? 'Exciting meetups coming up soon, near you!' : ''"
    :meetups="$nextMeetups"
  />

  <x-meetups
    title="Past Meetups"
    description="Revisit the past meetups that happened in Portugal."
    :meetups="$pastMeetups"
  />
</x-layout>

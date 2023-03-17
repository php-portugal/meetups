<x-layout>
  <div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl lg:max-w-4xl">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Past Meetups</h2>
        <p class="mt-2 text-lg leading-8 text-gray-600">This will show the past meetups that happened in Portugal.</p>
        <div class="mt-16 space-y-20 lg:mt-20 lg:space-y-20">
          @foreach ($pages as $page)
            <x-meetup-item :page="$page" />
          @endforeach
        </div>
      </div>
    </div>
  </div>
</x-layout>

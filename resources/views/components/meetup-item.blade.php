@props(['meetup'])
<article class="relative isolate flex flex-col gap-8 lg:flex-row">
  <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
    <img
      src="{{ $meetup['featured_image'] }}"
      class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover"
    >
    <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
  </div>
  <div>
    <div class="flex items-center gap-x-4 text-xs">
      <time datetime="{{ $meetup['date']->format('Y-m-d') }}" class="text-gray-500">{{ $meetup['date']->format('F d, Y') }}</time>
      <a href="/pages/{{ $meetup['slug'] }}" class="relative z-10 rounded-full bg-gray-50 py-1.5 px-3 font-medium text-gray-600 hover:bg-gray-100">
        {{ $meetup['location'] }}
      </a>
    </div>
    <div class="group relative max-w-xl">
      <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
        <a href="/pages/{{ $meetup['slug'] }}">
          <span class="absolute inset-0"></span>
          {{ $meetup['title'] }}
        </a>
      </h3>
      <p class="mt-5 text-sm leading-6 text-gray-600">{{ $meetup['content'] }}</p>
    </div>
  </div>
</article>

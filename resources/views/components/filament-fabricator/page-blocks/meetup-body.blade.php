@props([
    'date' => '',
    'title' => 'Meetup',
    'event' => null,
    'eventLink' => null,
    'sponsor' => null,
    'sponsorLink' => null,
    'content' => '',
    'schedule' => '',
    'footer' => '',
    'location' => '',
    'locationLink' => '',
    'featured_image' => '',
])

<div class="bg-white py-32 px-6 lg:px-8">
  <div class="mx-auto max-w-3xl text-base leading-7 text-gray-700">
    <p class="text-base font-semibold leading-7 text-indigo-600">{{ \Carbon\Carbon::parse($date)->format('F d, Y') }}</p>
    <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $title }}</h1>

        @if ($featured_image)
            <figure class="my-5">
                <img src="{{ $featured_image->url }}" alt="">
            </figure>
       @endif

      @isset($event)
        @empty($eventLink)
            <p> {{ $event }} </p>
        @else
            <a class="flex gap-x-3 mt-2" href="{{$eventLink}}">
                <x-heroicon-o-ticket class="w-4 text-purple-800" />
                <span><strong class="font-semibold text-gray-900">{{$event}}</strong></span>
            </a>
        @endempty
      @endisset
      @isset($sponsor)
            @empty($sponsorLink)
                <p>Sponsor: {{ $sponsor }} </p>
            @else
                <a class="flex gap-x-3 mt-2" href="{{$sponsorLink}}">
                    <x-heroicon-o-speakerphone class="w-4 text-purple-800" />
                    <span><strong class="font-semibold text-gray-900">Sponsor: {{$sponsor}}</strong></span>
                </a>
            @endempty
          @endisset
      @isset($location)
        @empty($locationLink)
            <p class="flex items-center gap-x-3 font-semibold text-gray-900 mb-2">
                <x-heroicon-o-location-marker class="w-4 text-purple-800" />
                <span>{{$location}}</span>
            </p>
        @else
            <p class="flex items-center gap-x-3 font-semibold text-gray-900 mt-2">
                <x-heroicon-o-location-marker class="w-4 text-purple-800" />
                <span>{{$location}}</span>
            </p>
            <a class="ml-6 text-xs text-gray-400" href="{{$locationLink}}" target="_blank">
                Click for Google Maps directions
            </a>
          @endempty
      @endisset
    <div class="mt-10 max-w-2xl">
      <p>
          <x-markdown>
            {{ $content }}
          </x-markdown>
      </p>

        <div class="my-10">
            <p class="flex items-center gap-x-3 font-semibold text-gray-900 mb-2">
                <x-heroicon-o-calendar class="w-4 text-purple-800" />
                <span>Schedule</span>
            </p>
            <x-markdown>
                {{ $schedule }}
            </x-markdown>
        </div>
        <p>
          <x-markdown>
            {{ $footer }}
          </x-markdown>
      </p>
    </div>
  </div>
</div>

@push('scripts')
    {!! $structuredData !!}
@endpush


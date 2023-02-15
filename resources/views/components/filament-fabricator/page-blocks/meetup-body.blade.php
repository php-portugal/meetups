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
])

<div class="mb-12 space-y-4">
    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">{{ $date }}</h3>
    <h3 class="text-2xl font-semibold text-gray-800 dark:text-white">{{ $title }}</h3>
    @isset($event)
        @empty($eventLink)
            <p> {{ $event }} </p>
        @else
            <a
                href="{{ $eventLink }}" class="block font-medium text-primary"
                target="_blank"
            >
                {{ $event }}
            </a>
        @endempty
    @endisset

    <p class="mb-6 text-gray-600 dark:text-gray-300">
        <x-markdown>
            {{ $content }}
        </x-markdown>
    </p>

    @isset($sponsor)
        @empty($sponsorLink)
            <p> {{ $sponsor }} </p>
        @else
            <a
                href="{{ $sponsorLink }}" class="block font-medium text-primary"
                target="_blank"
            >
                {{ $sponsor }}
            </a>
        @endempty
    @endisset

    <x-markdown>
        {{ $schedule }}
    </x-markdown>

    <x-markdown>
        {{ $footer }}
    </x-markdown>
</div>

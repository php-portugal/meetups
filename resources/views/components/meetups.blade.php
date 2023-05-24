@props(['title', 'description', 'meetups'])
<div class="bg-white my-24 sm:my-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:max-w-4xl">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $title }}</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">{{ $description }}</p>
            <div class="mt-16 space-y-20 lg:mt-20 lg:space-y-20">
                @forelse ($meetups as $meetup)
                    <x-meetup-item :meetup="$meetup"/>
                @empty
                    <div class="flex w-full justify-center">
                        <div class="text-center">
                            <div class="text-4xl">
                                ⏰ 🗺️
                            </div>
                            <div class="mt-8">
                                We're waiting for the next destination to come up!<br><br>
                                Meanwhile, check previous events 👇
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>

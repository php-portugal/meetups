<?php

namespace App\Http\Controllers;

use Awcodes\Curator\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Z3d0X\FilamentFabricator\Models\Page;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $meetups = Page::query()
            ->where('layout', 'meetup')
            ->get()
            ->map(function ($page) {
                $data = data_get($page, 'blocks.0.data');

                return [
                    'slug' => $page->slug,
                    'title' => $data['title'],
                    'content' => str($data['content'])->limit(200),
                    'date' => Carbon::parse($data['date']),
                    'location' => $data['location'],
                    'featured_image' => Media::query()->find($data['featured_image'])?->url,
                ];
            });

        /** @var Collection $pastMeetups */
        /** @var Collection $nextMeetups */
        [$pastMeetups, $nextMeetups] = $meetups->partition(
            fn($meetup) => $meetup['date']?->isPast()
        );

        [$pastMeetups, $nextMeetups] = [
            $pastMeetups->sortByDesc('date'),
            $nextMeetups->sortBy('date'),
        ];

        return view('home', [
            'pastMeetups' => $pastMeetups,
            'nextMeetups' => $nextMeetups,
        ]);
    }
}

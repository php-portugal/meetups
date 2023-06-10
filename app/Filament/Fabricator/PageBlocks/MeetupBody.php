<?php

namespace App\Filament\Fabricator\PageBlocks;

use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Models\Media;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Spatie\SchemaOrg\Schema;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class MeetupBody extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('meetup-body')
            ->schema([
                CuratorPicker::make('featured_image'),

                DatePicker::make('date'),
                TextInput::make('title'),

                TextInput::make('location'),
                TextInput::make('locationLink')->label('Location Link'),

                TextInput::make('Event'),
                TextInput::make('EventLink')->label('Event Link'),

                TextInput::make('Sponsor'),
                TextInput::make('SponsorLink')->label('Sponsor Link'),

                MarkdownEditor::make('content'),
                MarkdownEditor::make('schedule')
                    ->hint('Do not forget to use a list.'),
                MarkdownEditor::make('footer'),
            ]);
    }

    public static function mutateData(array $data): array
    {
       $featuredImage = Media::query()->find(
           data_get($data, 'featured_image')
       );

        return [
            ...$data,
            'featured_image' => $featuredImage,
            'structured_data' => Schema::event()
                ->about(data_get($data, 'Event'))
                ->doorTime(data_get($data, 'date'))
                ->eventAttendanceMode(\Spatie\SchemaOrg\EventAttendanceModeEnumeration::OfflineEventAttendanceMode)
                ->eventSchedule(data_get($data, 'schedule'))
                ->eventStatus(\Spatie\SchemaOrg\EventStatusType::EventScheduled)
                ->funder(config('php-portugal.structured_data.founder', ''))
                ->isAccessibleForFree(true)
                ->keywords(config('php-portugal.structured_data.keywords', ''))
                ->location(Schema::place()->address(data_get($data, 'location_link')))
                ->organizer(config('php-portugal.structured_data.organizer', ''))
                ->sponsor(Schema::organization()->name(data_get($data, 'Sponsor')))
                ->startDate(data_get($data, 'date'))
                ->description(data_get($data, 'content'))
                ->image($featuredImage)
                ->name(data_get($data, 'title'))
                ->url(data_get($data, 'EventLink'))
                ->toScript()
        ];
    }
}

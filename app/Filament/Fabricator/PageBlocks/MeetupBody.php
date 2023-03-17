<?php

namespace App\Filament\Fabricator\PageBlocks;

use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Models\Media;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
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
                MarkdownEditor::make('schedule'),
                MarkdownEditor::make('footer'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return [
            ...$data,
            'featured_image' => Media::query()->find(
                data_get($data, 'featured_image')
            ),
        ];
    }
}

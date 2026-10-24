<?php

namespace App\Filament\Resources\Stores\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class StoreForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('city')
                    ->required(),
                Textarea::make('address')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('phone')
                    ->tel(),
                TextInput::make('hours'),
                TextInput::make('maps_url')
                    ->url(),
                Toggle::make('is_main')
                    ->required(),
            ]);
    }
}

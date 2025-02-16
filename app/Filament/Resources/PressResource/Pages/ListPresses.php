<?php

namespace App\Filament\Resources\PressResource\Pages;

use App\Filament\Resources\PressResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPresses extends ListRecords
{
    protected static string $resource = PressResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

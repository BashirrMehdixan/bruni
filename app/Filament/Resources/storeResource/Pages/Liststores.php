<?php

namespace App\Filament\Resources\storeResource\Pages;

use App\Filament\Resources\storeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class Liststores extends ListRecords
{
    protected static string $resource = storeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

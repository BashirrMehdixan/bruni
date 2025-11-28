<?php

namespace App\Filament\Resources\storeResource\Pages;

use App\Filament\Resources\storeResource;
use Filament\Resources\Pages\CreateRecord;

class Createstore extends CreateRecord
{
    protected static string $resource = storeResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}

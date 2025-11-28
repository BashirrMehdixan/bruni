<?php

namespace App\Filament\Resources\storeResource\Pages;

use App\Filament\Resources\storeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class Editstore extends EditRecord
{
    protected static string $resource = storeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

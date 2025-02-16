<?php

namespace App\Filament\Resources\PressResource\Pages;

use App\Filament\Resources\PressResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPress extends EditRecord
{
    protected static string $resource = PressResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\ArtsResource\Pages;

use App\Filament\Resources\ArtsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArts extends EditRecord
{
    protected static string $resource = ArtsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

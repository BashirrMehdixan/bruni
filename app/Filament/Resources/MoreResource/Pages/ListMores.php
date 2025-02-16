<?php

namespace App\Filament\Resources\MoreResource\Pages;

use App\Filament\Resources\MoreResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMores extends ListRecords
{
    protected static string $resource = MoreResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

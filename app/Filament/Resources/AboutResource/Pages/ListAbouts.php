<?php

namespace App\Filament\Resources\AboutResource\Pages;

use App\Filament\Resources\AboutResource;
use App\Models\About;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAbouts extends ListRecords
{
    protected static string $resource = AboutResource::class;


    protected function getHeaderActions(): array
    {
        if (About::count() == 0) {
            return [
                CreateAction::make()->label('Create new'),
            ];
        } else {
            return [
                //
            ];
        }
    }
}

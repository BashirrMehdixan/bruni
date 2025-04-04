<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use App\Models\Contact;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        if (Contact::count() == 0) {
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

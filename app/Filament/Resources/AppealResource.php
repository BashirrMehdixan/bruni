<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AppealResource\Pages;
use App\Filament\Resources\AppealResource\RelationManagers;
use App\Models\Appeal;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AppealResource extends Resource
{
    protected static ?string $model = Appeal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('phone_number')->sortable()->searchable()->label('Phone'),
                TextColumn::make('email')->sortable()->searchable(),
                TextColumn::make('created_at')->dateTime()->sortable()->searchable()->label('Date'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAppeals::route('/'),
//            'create' => Pages\CreateAppeal::route('/create'),
            'edit' => Pages\EditAppeal::route('/{record}/edit'),
        ];
    }
}

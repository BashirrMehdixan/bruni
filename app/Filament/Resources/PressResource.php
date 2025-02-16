<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PressResource\Pages;
use App\Filament\Resources\PressResource\RelationManagers;
use App\Models\Press;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PressResource extends Resource
{
    protected static ?string $model = Press::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('title')->required(),
                    RichEditor::make('description'),
                ])->columnSpan(2),
                Section::make()->schema([
                    FileUpload::make('thumbnail')
                        ->image()
                        ->imageEditor()
                        ->directory('uploads/images/more')
                        ->multiple(),
                    ToggleButtons::make('status')->boolean()->grouped()->default(true)
                ])->columnSpan(1)
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail')->stacked()->limit(3),
                TextColumn::make('title'),
                TextColumn::make('slug'),
                TextColumn::make('created_at')->dateTime(),
                CheckboxColumn::make('status')
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListPresses::route('/'),
            'create' => Pages\CreatePress::route('/create'),
            'edit' => Pages\EditPress::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MoreResource\Pages;
use App\Filament\Resources\MoreResource\RelationManagers;
use App\Models\More;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
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

class MoreResource extends Resource
{
    protected static ?string $model = More::class;

    protected static ?string $navigationGroup = 'More';

    protected static ?string $pluralLabel = 'More';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('title')->required(),
                    Select::make('collection_id')
                        ->relationship('collection', 'title')
                        ->label('Collection')
                        ->native(false)
                        ->preload()
                        ->searchable()
                        ->required(),
                    RichEditor::make('description')->columnSpan('full')
                ])->columnSpan(2)->columnSpan(2),
                Section::make()->schema([
                    FileUpload::make('cover_photo')->image()->imageEditor()->directory('uploads/images/mores/cover'),
                    FileUpload::make('thumbnail')->image()->multiple()->reorderable()->panelLayout('grid')->imageEditor()->directory('uploads/images/mores'),
                    ToggleButtons::make('status')->boolean()->grouped()->default(true)
                ])->columnSpan(1)
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail')->stacked()->limit(1),
                TextColumn::make('title')->searchable()->sortable(),
                TextColumn::make('collection.title')->label('Collection')->sortable()->searchable(),
                TextColumn::make('slug')->searchable()->sortable(),
                CheckboxColumn::make('status')->sortable(),
                TextColumn::make('created_at')->dateTime()->sortable(),
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
            'index' => Pages\ListMores::route('/'),
            'create' => Pages\CreateMore::route('/create'),
            'edit' => Pages\EditMore::route('/{record}/edit'),
        ];
    }
}

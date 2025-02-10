<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtsResource\Pages;
use App\Filament\Resources\ArtsResource\RelationManagers;
use App\Models\Art;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ArtsResource extends Resource
{
    protected static ?string $model = Art::class;
    protected static ?string $pluralLabel = 'Arts';
    protected static ?string $navigationIcon = 'fas-palette';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('title')
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                        ->required(),
                    TextInput::make('slug')->unique(ignoreRecord: true)->readOnly()->required(),
                    Select::make('category_id')
                        ->label('Category')
                        ->relationship('category', 'title')
                        ->preload()
                        ->native()
                        ->searchable()
                        ->required(),
                    TextInput::make('price')->integer(),
                    RichEditor::make('description')->columnSpan('full')
                ])->columns(2)->columnSpan(2),
                Section::make()->schema([
                    FileUpload::make('thumbnail')->label('Image')->image()->imageEditor()->directory('uploads/images/arts')->columnSpan('full'),
                    ToggleButtons::make('store')->label('Show in Work')->boolean()->grouped()->default(true),
                    ToggleButtons::make('work')->label('Show in Work')->boolean()->grouped()->default(true),
                    ToggleButtons::make('status')->boolean()->grouped()->default(true),
                ])->columnSpan(1)->columns(2)
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail')->label('Image'),
                TextColumn::make('title')->searchable()->sortable()->searchable(),
                TextColumn::make('category.title')->label('Category')->sortable()->searchable(),
                CheckboxColumn::make('store')->sortable(),
                CheckboxColumn::make('work')->sortable(),
                CheckboxColumn::make('status')->sortable(),
                TextColumn::make('created_at')->dateTime()->label('Time')->sortable(),
            ])
            ->filters([

            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make()
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
            'index' => Pages\ListArts::route('/'),
            'create' => Pages\CreateArts::route('/create'),
            'edit' => Pages\EditArts::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\storeResource\Pages;
use App\Models\store;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class storeResource extends Resource
{
    protected static ?string $model = store::class;

    protected static ?string $slug = 'stores';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make()->schema([
                    TextInput::make('name')
                        ->required(),
                    FileUpload::make('cover')->label('Image')->image()->imageEditor()->directory('uploads/images/store'),
                    ToggleButtons::make('status')->inline()->grouped()->boolean()->default(true),
                ])->columnSpanFull()->columns(1)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('slug')
                    ->searchable()
                    ->sortable(),
                ToggleColumn::make('status'),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])->reorderable('order');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\Liststores::route('/'),
            'create' => Pages\Createstore::route('/create'),
            'edit' => Pages\Editstore::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'slug'];
    }
}

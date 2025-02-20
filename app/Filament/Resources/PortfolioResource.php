<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioResource\Pages;
use App\Filament\Resources\PortfolioResource\RelationManagers;
use App\Models\Portfolio;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static ?string $navigationIcon = 'fas-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    RichEditor::make('description'),
                    Select::make('file_type')->options([
                        'video' => 'Video',
                        'image' => 'Image',
                        'url' => 'Url',

                    ])
                        ->native(false)
                        ->preload()
                        ->live()
                        ->afterStateUpdated(function (callable $set) {
                            $set('video', null);
                            $set('url', null);
                            $set('image', null);
                        })
                        ->default('video'),
                    TextInput::make('file')->label('Video URL')->hidden(fn(Get $get) => $get('file_type') !== 'url'),
                    FileUpload::make('file')->hidden(fn(Get $get) => $get('file_type') == 'url')->directory('uploads/portfolio')
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Split::make([
                    Stack::make([
                        ImageColumn::make('thumbnail'),
                        TextColumn::make('description')
                    ])
                ])
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
            'index' => Pages\ListPortfolios::route('/'),
            'create' => Pages\CreatePortfolio::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }
}

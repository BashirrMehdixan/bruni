<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Tables\Actions\EditAction;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;
    protected static ?string $pluralLabel = 'About';
    protected static ?string $navigationIcon = 'fas-circle-info';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    RichEditor::make('description'),
                    Select::make('video_type')->options([
                        'video' => 'Video',
                        'url' => 'Url'
                    ])->hidden()
                        ->live()
                        ->afterStateUpdated(function (callable $set) {
                            $set('video', null);
                            $set('url', null);
                        })
                        ->native(false),
                    TextInput::make('url')
                        ->label('URL')
                        ->hidden(fn(Get $get) => $get('video_type') !== 'url')
                        ->maxLength(255)
                        ->required(fn(Get $get) => $get('video_type') === 'url'),
                    FileUpload::make('video')
                        ->acceptedFileTypes(['video/mp4', 'video/avi', 'video/mpeg', 'video/quicktime'])
//                        ->hidden(fn(Get $get) => $get('video_type') !== 'video')
//                        ->required(fn(Get $get) => $get('video_type') === 'video')
                        ->directory('uploads/videos/about'),
                ])->columnSpan(2),
                Section::make()->schema([
                    FileUpload::make('thumbnail')->image()->imageEditor()->directory('uploads/images/about')->columnSpan(1)
                ])->columnSpan(1)
            ])->columns(3);
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
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

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'fas-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('firstname'),
                    TextInput::make('lastname'),
                    TextInput::make('email')->unique(ignoreRecord: true)->required(),
                    TextInput::make('name')->unique(ignoreRecord: true)->required(),
                    Select::make('gender')->options([
                        '0' => 'Male',
                        '1' => 'Female',
                    ])
                        ->preload()
                        ->native(false),
                    Select::make('role_id')->options([
                        '0' => 'Super admin',
                        '1' => 'Admin',
                        '2' => 'Editor'
                    ])
                        ->preload()
                        ->default(2)
                        ->native(false)
                        ->required(),
                    TextInput::make('password')->password()->required()->hiddenOn('edit')
                ])->columns(2)->columnSpan(2),
                Section::make()->schema([
                    FileUpload::make('thumbnail')->image()->imageEditor()->directory('uploads/images/users'),
                    ToggleButtons::make('status')->grouped()->boolean()->default(true)
                ])->columnSpan(1)
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail')->label('Avatar'),
                TextColumn::make('firstname')->searchable()->sortable(),
                TextColumn::make('lastname')->searchable()->sortable(),
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('email')->searchable()->sortable(),
                TextColumn::make('role_id')->searchable()->formatStateUsing(function ($state) {
                    return $state == 0 ? 'Super admin' : ($state == 1 ? 'Admin' : 'Editor');
                })
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        '0' => 'success',
                        '1' => 'warning',
                        '2' => 'danger',
                    })->sortable(),
                CheckboxColumn::make('status')->sortable()
            ])
            ->filters([
                //
            ])
            ->modifyQueryUsing(function (Builder $query) {
                $user = auth()->user();
                if ($user->role_id == 1) {
                    $query->where('role_id', '!=', 0); // role_id 0 olanları filtrele
                }
            })
            ->actions([
                DeleteAction::make(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}

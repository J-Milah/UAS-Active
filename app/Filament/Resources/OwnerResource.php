<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OwnerResource\Pages;
use App\Models\Owner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class OwnerResource extends Resource
{
    protected static ?string $model = Owner::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Input for the name of the tour guide
                Forms\Components\TextInput::make('name_owner')
                    ->required()
                    ->label('Nama owner'),

                // Input for avatar image (File Upload)
                Forms\Components\FileUpload::make('avatar')
                    ->label('Avatar')
                    ->image() // Ensures it's an image upload
                    ->disk('public') // You can specify the disk to store the image, usually 'public' is default
                    ->directory('avatars') // Optional: Specify a subdirectory in the storage
                    ->required(), // Make this field required if needed

                // Input for gender (select options)
                Forms\Components\Select::make('gender')
                    ->options([
                        'Laki-laki' => 'Laki-laki',
                        'Perempuan' => 'Perempuan',
                    ])
                    ->label('Jenis Kelamin'),

                // Input for phone number
                Forms\Components\TextInput::make('no_telepon')
                    ->label('No Telepon'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Column for the tour guide's ID
                Tables\Columns\TextColumn::make('id_owner')
                    ->label('ID owner')
                    ->sortable()
                    ->searchable(),

                // Column for the tour guide's name
                Tables\Columns\TextColumn::make('name_owner')
                    ->label('Nama owner')
                    ->sortable()
                    ->searchable(),

                // Column for the gender
                Tables\Columns\TextColumn::make('gender')
                    ->label('Jenis Kelamin')
                    ->sortable(),

                // Column for the phone number
                Tables\Columns\TextColumn::make('no_telepon')
                    ->label('No Telepon')
                    ->sortable(),

                // Column for the avatar image (display as image thumbnail)
                Tables\Columns\ImageColumn::make('avatar')
                    ->label('Avatar')
                    ->disk('public') // Match the disk used in the FileUpload
                    ->width(50)
                    ->height(50),
            ])
            ->filters([ 
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // Add the Delete Action here
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListOwners::route('/'),
            'create' => Pages\CreateOwner::route('/create'),
            'edit' => Pages\EditOwner::route('/{record}/edit'),
        ];
    }
}

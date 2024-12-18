<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DestinationResource\Pages;
use App\Models\Destination;
use App\Models\Category;
use App\Models\Owner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DestinationResource extends Resource
{
    protected static ?string $model = Destination::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Input untuk nama destinasi
                Forms\Components\TextInput::make('name_destination')
                    ->required()
                    ->label('Nama Destinasi'),

                // Input untuk alamat destinasi
                Forms\Components\TextInput::make('address')
                    ->label('Alamat Destinasi'),

                // Input untuk URL BMap
                Forms\Components\TextInput::make('bmap')
                    ->label('BMap URL'),

                // Input untuk thumbnail destinasi (gambar)
                Forms\Components\FileUpload::make('thumbnail')
                    ->label('Thumbnail')
                    ->image()
                    ->disk('public')
                    ->directory('thumbnails')
                    ->nullable(),

                // Input untuk status destinasi (Open/Close)
                Forms\Components\Select::make('status')
                    ->options([
                        'Open' => 'Open',
                        'Close' => 'Close',
                    ])
                    ->default('Open')
                    ->label('Status')
                    ->nullable(),

                // Input untuk memilih kategori destinasi
                Forms\Components\Select::make('id_category')
                    ->options(Category::all()->pluck('name_category', 'id_category'))
                    ->label('Kategori Destinasi')
                    ->searchable()
                    ->nullable(),

                // Input untuk memilih owner
                Forms\Components\Select::make('id_owner')
                    ->options(owner::all()->pluck('name_owner', 'id_owner'))
                    ->label('owner')
                    ->searchable()
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Kolom untuk nama destinasi
                Tables\Columns\TextColumn::make('name_destination')
                    ->label('Nama Destinasi')
                    ->sortable()
                    ->searchable(),

                // Kolom untuk alamat destinasi
                Tables\Columns\TextColumn::make('address')
                    ->label('Alamat'),

                // Kolom untuk kategori destinasi
                Tables\Columns\TextColumn::make('category.name_category')
                    ->label('Kategori')
                    ->sortable(),

                // Kolom untuk owner
                Tables\Columns\TextColumn::make('owner.name_owner')
                    ->label('owner')
                    ->sortable(),

                // Kolom untuk status destinasi
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->sortable(),

            ])
            ->filters([
                // Anda bisa menambahkan filter untuk status atau kategori
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            // Menambahkan relasi terkait jika perlu
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDestinations::route('/'),
            'create' => Pages\CreateDestination::route('/create'),
            'edit' => Pages\EditDestination::route('/{record}/edit'),
        ];
    }
}

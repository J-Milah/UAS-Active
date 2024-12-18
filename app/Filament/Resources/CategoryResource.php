<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // Menentukan nama resource
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Input untuk nama kategori
                Forms\Components\TextInput::make('name_category')
                    ->required()
                    ->label('Nama Kategori'),

                // Input untuk deskripsi kategori
                Forms\Components\Textarea::make('description')
                    ->label('Deskripsi Kategori'),

            ]);
    }

    // Menentukan tampilan tabel
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Column for the tour guide's ID
                Tables\Columns\TextColumn::make('id_category')
                    ->label('ID Category')
                    ->sortable()
                    ->searchable(),

                // Kolom untuk nama kategori
                Tables\Columns\TextColumn::make('name_category')
                    ->label('Nama Kategori')
                    ->sortable()
                    ->searchable(),

                // Kolom untuk deskripsi kategori
                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi')
                    ->sortable(),

            ])
            ->filters([ 
                // Anda dapat menambahkan filter jika diperlukan
            ])
            ->actions([
                // Menambahkan aksi edit
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Menambahkan aksi bulk delete
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Anda dapat menambahkan relasi jika ada
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}

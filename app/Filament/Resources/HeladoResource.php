<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeladoResource\Pages;
use App\Filament\Resources\HeladoResource\RelationManagers;
use App\Models\Helado;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput\Mask;
use Filament\Tables\Columns\TextColumn;

class HeladoResource extends Resource
{
    protected static ?string $model = Helado::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('descripcion')->maxLength(500),
                Forms\Components\TextInput::make('precio')
                    ->label('Precio')
                    ->numeric()
                    ->required(),
                Forms\Components\Select::make('sabor')
                    ->options([
                        'chocolate' => 'Chocolate',
                        'fresa' => 'Fresa',
                        'vainilla' => 'Vainilla',
                    ]),
                Forms\Components\FileUpload::make('imagen')
                    ->disk('public')
                    ->label('Imagen')
                    ->image()
                    ->directory('uploads/images') // Carpeta donde se guardará
                    ->required() // Si es obligatorio
                    ->maxSize(2048) // Tamaño máximo en KB (2 MB)
                ,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('imagen')
                    ->label('Imagen')
                    ->circular()
                    ->size(50), // Tamaño de la imagen
                Tables\Columns\TextColumn::make('nombre')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('sabor')->sortable(),

                Tables\Columns\TextColumn::make('precio')
                    ->label('Precio')
                    ->sortable()
                    ->money('USD', true),
                Tables\Columns\TextColumn::make('descripcion')->limit(50),
            ])
            ->filters([
                //
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHelados::route('/'),
            'create' => Pages\CreateHelado::route('/create'),
            'edit' => Pages\EditHelado::route('/{record}/edit'),
        ];
    }
}

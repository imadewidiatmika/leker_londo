<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DealResource\Pages;
use App\Filament\Resources\DealResource\RelationManagers;
use App\Models\Deal;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DealResource extends Resource
{
    protected static ?string $model = Deal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(191),
                Forms\Components\TextInput::make('nowa')
                    ->maxLength(20),
                Forms\Components\TextInput::make('province_id')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('province_name')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('city_id')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('city_name')
                    ->required()
                    ->maxLength(100),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->query(Deal::orderBy('id', 'desc')) // Menambahkan query builder untuk mengurutkan data berdasarkan ID dari besar ke kecil
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nowa')
                    ->searchable(),
                Tables\Columns\TextColumn::make('province_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('province_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListDeals::route('/'),
            'create' => Pages\CreateDeal::route('/create'),
            'edit' => Pages\EditDeal::route('/{record}/edit'),
        ];
    }
}

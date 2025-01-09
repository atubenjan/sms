<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GenerateIdCardsResource\Pages;
use App\Filament\Resources\GenerateIdCardsResource\RelationManagers;
use App\Models\GenerateIdCards;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GenerateIdCardsResource extends Resource
{
    protected static ?string $model = GenerateIdCards::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListGenerateIdCards::route('/'),
            'create' => Pages\CreateGenerateIdCards::route('/create'),
            'edit' => Pages\EditGenerateIdCards::route('/{record}/edit'),
        ];
    }
}

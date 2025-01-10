<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GradeResource\Pages;
use App\Filament\Resources\GradeResource\RelationManagers;
use App\Models\Grade;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GradeResource extends Resource
{
    protected static ?string $model = Grade::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
protected  static ?string $navigationLabel = 'Grade';
protected static ?string $navigationGroup = 'Academic';
protected static ?int $navigationSort = 7;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('grade_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('grade_from')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('grade_upto')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('grade_designation')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('grade_point')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('grade_status')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('grade_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('grade_from')
                    ->searchable(),
                Tables\Columns\TextColumn::make('grade_upto')
                    ->searchable(),
                Tables\Columns\TextColumn::make('grade_designation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('grade_point')
                    ->searchable(),
                Tables\Columns\TextColumn::make('grade_status')
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
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListGrades::route('/'),
            'create' => Pages\CreateGrade::route('/create'),
            'view' => Pages\ViewGrade::route('/{record}'),
            'edit' => Pages\EditGrade::route('/{record}/edit'),
        ];
    }
}

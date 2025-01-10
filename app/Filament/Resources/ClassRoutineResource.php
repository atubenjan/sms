<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClassRoutineResource\Pages;
use App\Filament\Resources\ClassRoutineResource\RelationManagers;
use App\Models\ClassRoutine;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClassRoutineResource extends Resource
{
    protected static ?string $model = ClassRoutine::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected  static ?string $navigationLabel = 'Class Routine';
    protected static ?string $navigationGroup = 'Academic';
        

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('class')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('teacher')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('section')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('day')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('start_time')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('end_time')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('class_room')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('status')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('class')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher')
                    ->searchable(),
                Tables\Columns\TextColumn::make('section')
                    ->searchable(),
                Tables\Columns\TextColumn::make('day')
                    ->searchable(),
                Tables\Columns\TextColumn::make('start_time')
                    ->searchable(),
                Tables\Columns\TextColumn::make('end_time')
                    ->searchable(),
                Tables\Columns\TextColumn::make('class_room')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
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
            'index' => Pages\ListClassRoutines::route('/'),
            'create' => Pages\CreateClassRoutine::route('/create'),
            'view' => Pages\ViewClassRoutine::route('/{record}'),
            'edit' => Pages\EditClassRoutine::route('/{record}/edit'),
        ];
    }
}

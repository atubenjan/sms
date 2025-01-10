<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamScheduleResource\Pages;
use App\Filament\Resources\ExamScheduleResource\RelationManagers;
use App\Models\ExamSchedule;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExamScheduleResource extends Resource
{
    protected static ?string $model = ExamSchedule::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected  static ?string $navigationLabel = 'Exam Schedule';
    protected static ?string $navigationGroup = 'Academic';
    protected static ?string $slug='exam-schedules';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('class')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('section')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('exam_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('exam_date')
                    ->required(),
                Forms\Components\TextInput::make('start_time')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('end_time')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('duration')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('subject')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('max_mark')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('min_mark')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('room_no')
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
                Tables\Columns\TextColumn::make('section')
                    ->searchable(),
                Tables\Columns\TextColumn::make('exam_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('exam_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('start_time')
                    ->searchable(),
                Tables\Columns\TextColumn::make('end_time')
                    ->searchable(),
                Tables\Columns\TextColumn::make('duration')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subject')
                    ->searchable(),
                Tables\Columns\TextColumn::make('max_mark')
                    ->searchable(),
                Tables\Columns\TextColumn::make('min_mark')
                    ->searchable(),
                Tables\Columns\TextColumn::make('room_no')
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
            'index' => Pages\ListExamSchedules::route('/'),
            'create' => Pages\CreateExamSchedule::route('/create'),
            'view' => Pages\ViewExamSchedule::route('/{record}'),
            'edit' => Pages\EditExamSchedule::route('/{record}/edit'),
        ];
    }
}

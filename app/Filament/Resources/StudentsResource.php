<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentsResource\Pages;
use App\Filament\Resources\StudentsResource\RelationManagers;
use App\Models\Students;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentsResource extends Resource
{
    protected static ?string $model = Students::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected  static ?string $navigationLabel = 'Student';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('student_first_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_last_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_class')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_religion')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_gender')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_guardian')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_admission_no')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_dob')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_blood_group')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_admission_date')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_roll_no')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_photo')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_status')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('student_first_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_last_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_class')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_religion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_gender')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_guardian')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_admission_no')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_dob')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_blood_group')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_admission_date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_roll_no')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_photo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_status')
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
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudents::route('/create'),
            'view' => Pages\ViewStudents::route('/{record}'),
            'edit' => Pages\EditStudents::route('/{record}/edit'),
        ];
    }
}

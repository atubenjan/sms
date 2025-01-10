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
    protected static ?string $navigationGroup = 'People';
    protected static ?string $slug='students';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('academic_year')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('admission_no')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('admission_date')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('roll_no')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_status')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('first_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('middle_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('last_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('class')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('section')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('gender')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('dob')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('blood_group')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('religion')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('house')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('national)')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_photo')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('father_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('father_email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('father_phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('father_occuption')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('mother_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('mother_email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('mother_phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('mother_occuption')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('guardian_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('guardian_email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('guardian_phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('guardian_occuption')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('guardian_relation')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('guardian_address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('medical_condition_document')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('previous_school')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('academic_year')
                    ->searchable(),
                Tables\Columns\TextColumn::make('admission_no')
                    ->searchable(),
                Tables\Columns\TextColumn::make('admission_date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('roll_no')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('first_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('middle_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('last_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('class')
                    ->searchable(),
                Tables\Columns\TextColumn::make('section')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gender')
                    ->searchable(),
                Tables\Columns\TextColumn::make('dob')
                    ->searchable(),
                Tables\Columns\TextColumn::make('blood_group')
                    ->searchable(),
                Tables\Columns\TextColumn::make('religion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('house')
                    ->searchable(),
                Tables\Columns\TextColumn::make('national)')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_photo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('father_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('father_email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('father_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('father_occuption')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mother_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mother_email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mother_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mother_occuption')
                    ->searchable(),
                Tables\Columns\TextColumn::make('guardian_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('guardian_email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('guardian_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('guardian_occuption')
                    ->searchable(),
                Tables\Columns\TextColumn::make('guardian_relation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('guardian_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('medical_condition_document')
                    ->searchable(),
                Tables\Columns\TextColumn::make('previous_school')
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

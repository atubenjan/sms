<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeachersResource\Pages;
use App\Filament\Resources\TeachersResource\RelationManagers;
use App\Models\Teachers;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeachersResource extends Resource
{
    protected static ?string $model = Teachers::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected  static ?string $navigationLabel = 'Teacher';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('teacher_first_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('teacher_last_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('teacher_email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('teacher_phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('teacher_emmergency_contact')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('teacher_joining_date')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('teacher_parmanent_address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('teacher_present_address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('teacher_gender')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('teacher_religion')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('teacher_dob')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('teacher_marital_status')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('teacher_basicsalary')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('teacher_qualification')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('teacher_experience')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('teacher_subject')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('teacher_designation')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('teacher_department')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('teacher_photo')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('teacher_status')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('teacher_profession')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('teacher_nid')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('teacher_documents')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('teacher_first_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher_last_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher_email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher_emmergency_contact')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher_joining_date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher_parmanent_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher_present_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher_gender')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher_religion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher_dob')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher_marital_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher_basicsalary')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher_qualification')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher_experience')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher_subject')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher_designation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher_department')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher_photo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher_profession')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher_nid')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher_documents')
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
            'index' => Pages\ListTeachers::route('/'),
            'create' => Pages\CreateTeachers::route('/create'),
            'view' => Pages\ViewTeachers::route('/{record}'),
            'edit' => Pages\EditTeachers::route('/{record}/edit'),
        ];
    }
}

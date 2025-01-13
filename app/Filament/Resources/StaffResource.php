<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StaffResource\Pages;
use App\Filament\Resources\StaffResource\RelationManagers;
use App\Models\Staff;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StaffResource extends Resource
{
    protected static ?string $model = Staff::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Name')
                    ->required()
                    ->label('Name'),
                Forms\Components\TextInput::make('Department')
                    ->required()
                    ->label('Department'),
                Forms\Components\TextInput::make('Role')
                    ->required()
                    ->label('Role'),
                Forms\Components\Select::make('Gender')
                    ->required()
                    ->options([
                        'Male' => 'Male',
                        'Female' => 'Female',
                        ])
                    ->label('Gender'),
                Forms\Components\Select::make('Marital_status')
                    ->required()
                    ->options([
                        'Married' => 'Married',
                        'Single' => 'Single',
                    ])
                    ->label('Marital Status'),
                Forms\Components\TextInput::make('Fathers_name')
                    ->required()
                    ->label('Father\'s Name'),
                Forms\Components\TextInput::make('Mothers_name')
                    ->required()
                    ->label('Mother\'s Name'),
                Forms\Components\DatePicker::make('Date_of_Birth')
                    ->required()
                    ->label('Date of Birth'),
                Forms\Components\TextInput::make('Language_Known')
                    ->required()
                    ->label('Language Known'),
                Forms\Components\TextInput::make('Qualification')
                    ->required()
                    ->label('Qualification'),
                Forms\Components\TextInput::make('Phone_number')
                    ->required()
                    ->label('Phone Number'),
                Forms\Components\TextInput::make('Email_Address')
                    ->required()
                    ->email()
                    ->label('Email Address'),
                Forms\Components\DatePicker::make('Date_of_Joining')
                    ->required()
                    ->label('Date of Joining'),
                Forms\Components\TextInput::make('Work_Experience')
                    ->required()
                    ->label('Work Experience'),
                Forms\Components\TextInput::make('Permanent_address')
                    ->required()
                    ->label('Permanent Address'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Department')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Role')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Phone_number')->label('Phone Number'),
                Tables\Columns\TextColumn::make('Email_Address')->label('Email Address'),
                Tables\Columns\TextColumn::make('Date_of_Joining')->date()->label('Date of Joining'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListStaff::route('/'),
            'create' => Pages\CreateStaff::route('/create'),
            'edit' => Pages\EditStaff::route('/{record}/edit'),
        ];
    }
}

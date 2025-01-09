<?php

namespace App\Filament\Resources\DisabledStudentResource\Pages;

use App\Filament\Resources\DisabledStudentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDisabledStudents extends ListRecords
{
    protected static string $resource = DisabledStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

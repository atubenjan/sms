<?php

namespace App\Filament\Resources\PromoteStudentResource\Pages;

use App\Filament\Resources\PromoteStudentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPromoteStudents extends ListRecords
{
    protected static string $resource = PromoteStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

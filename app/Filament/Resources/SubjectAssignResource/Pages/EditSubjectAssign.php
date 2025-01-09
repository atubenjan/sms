<?php

namespace App\Filament\Resources\SubjectAssignResource\Pages;

use App\Filament\Resources\SubjectAssignResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubjectAssign extends EditRecord
{
    protected static string $resource = SubjectAssignResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

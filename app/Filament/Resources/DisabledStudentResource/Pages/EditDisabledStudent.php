<?php

namespace App\Filament\Resources\DisabledStudentResource\Pages;

use App\Filament\Resources\DisabledStudentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDisabledStudent extends EditRecord
{
    protected static string $resource = DisabledStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\PromoteStudentResource\Pages;

use App\Filament\Resources\PromoteStudentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPromoteStudent extends EditRecord
{
    protected static string $resource = PromoteStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

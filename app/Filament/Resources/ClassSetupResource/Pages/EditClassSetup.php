<?php

namespace App\Filament\Resources\ClassSetupResource\Pages;

use App\Filament\Resources\ClassSetupResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClassSetup extends EditRecord
{
    protected static string $resource = ClassSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

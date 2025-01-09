<?php

namespace App\Filament\Resources\ClassSetupResource\Pages;

use App\Filament\Resources\ClassSetupResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClassSetups extends ListRecords
{
    protected static string $resource = ClassSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

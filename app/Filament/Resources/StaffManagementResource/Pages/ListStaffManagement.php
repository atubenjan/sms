<?php

namespace App\Filament\Resources\StaffManagementResource\Pages;

use App\Filament\Resources\StaffManagementResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStaffManagement extends ListRecords
{
    protected static string $resource = StaffManagementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

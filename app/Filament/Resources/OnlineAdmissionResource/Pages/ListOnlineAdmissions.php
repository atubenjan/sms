<?php

namespace App\Filament\Resources\OnlineAdmissionResource\Pages;

use App\Filament\Resources\OnlineAdmissionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOnlineAdmissions extends ListRecords
{
    protected static string $resource = OnlineAdmissionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

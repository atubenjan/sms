<?php

namespace App\Filament\Resources\OnlineAdmissionResource\Pages;

use App\Filament\Resources\OnlineAdmissionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOnlineAdmission extends EditRecord
{
    protected static string $resource = OnlineAdmissionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

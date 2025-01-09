<?php

namespace App\Filament\Resources\WebsiteSetupResource\Pages;

use App\Filament\Resources\WebsiteSetupResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWebsiteSetup extends EditRecord
{
    protected static string $resource = WebsiteSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

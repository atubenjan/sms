<?php

namespace App\Filament\Resources\BillingsResource\Pages;

use App\Filament\Resources\BillingsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBillings extends EditRecord
{
    protected static string $resource = BillingsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

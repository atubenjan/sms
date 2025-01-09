<?php

namespace App\Filament\Resources\BillingsResource\Pages;

use App\Filament\Resources\BillingsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBillings extends ListRecords
{
    protected static string $resource = BillingsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

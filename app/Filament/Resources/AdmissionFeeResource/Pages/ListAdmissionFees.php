<?php

namespace App\Filament\Resources\AdmissionFeeResource\Pages;

use App\Filament\Resources\AdmissionFeeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdmissionFees extends ListRecords
{
    protected static string $resource = AdmissionFeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

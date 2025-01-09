<?php

namespace App\Filament\Resources\IDCardsResource\Pages;

use App\Filament\Resources\IDCardsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIDCards extends ListRecords
{
    protected static string $resource = IDCardsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

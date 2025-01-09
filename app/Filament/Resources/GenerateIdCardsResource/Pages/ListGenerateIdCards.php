<?php

namespace App\Filament\Resources\GenerateIdCardsResource\Pages;

use App\Filament\Resources\GenerateIdCardsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGenerateIdCards extends ListRecords
{
    protected static string $resource = GenerateIdCardsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

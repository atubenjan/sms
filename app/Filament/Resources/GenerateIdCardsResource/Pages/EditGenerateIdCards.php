<?php

namespace App\Filament\Resources\GenerateIdCardsResource\Pages;

use App\Filament\Resources\GenerateIdCardsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGenerateIdCards extends EditRecord
{
    protected static string $resource = GenerateIdCardsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

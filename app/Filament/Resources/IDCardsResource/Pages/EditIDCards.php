<?php

namespace App\Filament\Resources\IDCardsResource\Pages;

use App\Filament\Resources\IDCardsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIDCards extends EditRecord
{
    protected static string $resource = IDCardsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

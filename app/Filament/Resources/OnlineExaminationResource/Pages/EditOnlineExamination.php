<?php

namespace App\Filament\Resources\OnlineExaminationResource\Pages;

use App\Filament\Resources\OnlineExaminationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOnlineExamination extends EditRecord
{
    protected static string $resource = OnlineExaminationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\OnlineExaminationResource\Pages;

use App\Filament\Resources\OnlineExaminationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOnlineExaminations extends ListRecords
{
    protected static string $resource = OnlineExaminationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

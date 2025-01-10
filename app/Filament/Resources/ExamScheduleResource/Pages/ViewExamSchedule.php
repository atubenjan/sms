<?php

namespace App\Filament\Resources\ExamScheduleResource\Pages;

use App\Filament\Resources\ExamScheduleResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewExamSchedule extends ViewRecord
{
    protected static string $resource = ExamScheduleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

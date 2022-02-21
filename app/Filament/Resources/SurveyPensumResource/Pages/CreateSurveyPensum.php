<?php

namespace App\Filament\Resources\SurveyPensumResource\Pages;

use App\Filament\Resources\SurveyPensumResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSurveyPensum extends CreateRecord
{
    protected static string $resource = SurveyPensumResource::class;

    protected function afterCreate() {
        $userid = auth()->user()->id;
        $this->record->person_id = $userid;
        $this->record->save();

        return $this;
    }
}

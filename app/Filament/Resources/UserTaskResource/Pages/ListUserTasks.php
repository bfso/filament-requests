<?php

namespace App\Filament\Resources\UserTaskResource\Pages;

use App\Filament\Resources\UserTaskResource;
use App\Models\UserTask;
use Filament\Resources\Pages\ListRecords;

class ListUserTasks extends ListRecords
{
    protected static string $resource = UserTaskResource::class;

    public function toggleDone(UserTask $userTask) {
        $userTask->done = !$userTask->done;
        $userTask->save();
    }
}

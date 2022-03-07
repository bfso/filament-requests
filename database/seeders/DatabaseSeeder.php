<?php

namespace Database\Seeders;

use App\Http\Resources\Task;
use App\Models\Group;
use App\Models\Task as ModelsTask;
use App\Models\UserTask;
use Filament\Facades\Filament;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Auth\SessionGuard;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        /** @var SessionGuard $auth */
        $auth = Filament::auth();

        /** @var EloquentUserProvider $userProvider */
        $userProvider = $auth->getProvider();

        $userModel = $userProvider->getModel();

        $user = $userModel::create([
            'email'=>'admin@bfo.ch',
            'name'=>'admin@bfo.ch',
            'password'=>Hash::make('admin@bfo.ch'),
            'address'=>'Lonzastrasse 15, 3930 Visp',
        ]);

        Group::create([
            'name' => 'INF3',
            'user_id' => 1,
        ]);

        ModelsTask::create([
            'description' => 'Testauftrag',
            'group_id' => 1,
            'time' => '10',
        ]);

        UserTask::create([
            'task_id' => 1,
            'user_id' => 1,
            'done' => false,
        ]);
    }
}

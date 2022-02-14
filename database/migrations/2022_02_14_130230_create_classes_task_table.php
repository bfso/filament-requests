<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes_task', function (Blueprint $table) {
            $table->id();
            $table->foreignId('task_id');
            $table->foreignId('class_id');
            $table->foreignId('user_id');
            $table->boolean('work_finished'); // TRUE if task done
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes_task');
    }
}

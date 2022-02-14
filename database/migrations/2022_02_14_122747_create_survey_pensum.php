<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyPensum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_pensums', function (Blueprint $table) {
            $table->id();
            $table->foreignId('person_id');
            $table->integer('classhoures_old');
            $table->integer('classhoures_new');
            $table->string('note');
            $table->boolean('headteacher_visit');
            $table->boolean('headteacher_talk');
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
        Schema::dropIfExists('survey_pensums');
    }
}

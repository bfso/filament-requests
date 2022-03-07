<?php

namespace Tests\Unit;

use App\Models\SurveyPensum;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class SurveyPensumCreateTest extends TestCase {
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_create() {
        $this->seed();

        $note = rand(5,500000);

        // Create a new entry
        SurveyPensum::create([
            'person_id' => 1,
            'classhoures_old' => 6,
            'classhoures_new' => 5,
            'note' => $note,
            'headteacher_visit' => false,
            'headteacher_talk' => false,
            'year' => '2022',
        ]);

        // Check if entry exists
        $this->assertDatabaseHas('survey_pensums',[
            'note'=>$note
        ]);

    }
}

<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class SurveyPensumCreateTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_create()
    {
        $this->seed();
        $this->assertDatabaseHas('users', [
            'email' => 'admin@bfo.ch'
        ]);
    }
}

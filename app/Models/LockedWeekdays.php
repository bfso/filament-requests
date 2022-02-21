<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LockedWeekdays extends Model
{
    use HasFactory;

    protected $fillable = [
        'survey-pensum_id',
        'weekday',
        'cause'
    ];

    public function survey_pensum() {
        return $this->belongsTo(SurveyPensum::class, 'survey-pensum_id');
    }
}

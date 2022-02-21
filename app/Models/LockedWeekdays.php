<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LockedWeekdays extends Model
{
    use HasFactory;

    protected $fillable = [
        'survey_pensum_id',
        'weekday',
        'cause'
    ];

    public function surveyPensum() {
        return $this->belongsTo(SurveyPensum::class, 'survey_pensum_id');
    }
}

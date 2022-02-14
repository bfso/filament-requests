<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyPensum extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'classhoures_old',
        'classhoures_new',
        'note',
        'headteacher_visit',
        'headteacher_talk'
    ];

    public function pensumBlockedWeekdays() {
        return $this->hasMany(LockedWeekdays::class, 'survey_pensum_id');
    }

    public function person() {
        return $this->belongsTo(User::class, 'person_id');
    }
}

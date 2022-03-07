<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTask extends Model
{
    use HasFactory;

    public $table = "user_task";

    public function task() {
        return $this->belongsTo(Task::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}

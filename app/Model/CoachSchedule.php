<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CoachSchedule extends Model
{
    protected $fillable = [
        'coach_id', 'time', 'work'
    ];
}

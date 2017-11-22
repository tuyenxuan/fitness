<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CoachSchedule extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'coach_id', 'time', 'work'
    ];
}

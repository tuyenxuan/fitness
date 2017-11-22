<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'user_id', 'date', 'excercise_id', 'time', 'description'
    ];
}

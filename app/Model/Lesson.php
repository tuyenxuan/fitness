<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'letter_id', 'excercise_id', 'time', 'description'
    ];
}

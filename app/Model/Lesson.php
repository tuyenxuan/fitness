<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'user_id', 'date', 'excercise_id', 'time', 'description'
    ];

    public function excercise()
    {
        return $this->belongsTo('App\Model\Excercise', 'excercise_id', 'id');
    }
}

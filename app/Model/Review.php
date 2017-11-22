<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'report_id', 'member_id', 'coach_id', 'title', 'content'
    ];

    public function member()
    {
        return $this->belongsTo('App\Model\User', 'member_id', 'id');
    }

    public function report()
    {
        return $this->belongsTo('App\Model\User', 'report_id', 'id');
    }
}

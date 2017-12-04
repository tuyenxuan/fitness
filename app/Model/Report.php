<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'member_id', 'coach_id', 'title', 'content'
    ];

    public function coach()
    {
        return $this->belongsTo('App\Model\User', 'coach_id', 'id');
    }

    public function member()
    {
        return $this->belongsTo('App\Model\User', 'member_id', 'id');
    }
}

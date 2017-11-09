<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    protected $fillable = [
        'create_date', 'member_id', 'coach_id', 'title', 'content', 'type'
    ];
}

<?php

namespace App\Model;

class ProfileCoach extends User
{
    public $timestamps = false;
    protected $fillable = [
        'user_id', 'certificate', 'more_info'
    ];
}

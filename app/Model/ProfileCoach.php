<?php

namespace App\Model;

class ProfileCoach extends User
{
    protected $fillable = [
        'user_id', 'certificate', 'more_info'
    ];
}

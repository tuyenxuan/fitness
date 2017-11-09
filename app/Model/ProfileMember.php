<?php

namespace App\Model;

class ProfileMember extends User
{
    protected $fillable = [
        'user_id', 'presentation'
    ];
}

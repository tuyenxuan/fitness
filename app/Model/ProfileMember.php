<?php

namespace App\Model;

class ProfileMember extends User
{
    public $timestamps = false;
    protected $fillable = [
        'user_id', 'presentation'
    ];
}

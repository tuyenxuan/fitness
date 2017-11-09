<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    protected $fillable = [
        'name', 'display_name', 'url'
    ];
}

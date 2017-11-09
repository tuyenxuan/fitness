<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WebInfo extends Model
{
    protected $fillable = [
        'label', 'title', 'content', 'url'
    ];
}

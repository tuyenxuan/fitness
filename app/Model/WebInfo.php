<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WebInfo extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'label', 'title', 'content', 'url'
    ];
}

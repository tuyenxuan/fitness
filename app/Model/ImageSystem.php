<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ImageSystem extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'label', 'url'
    ];
}

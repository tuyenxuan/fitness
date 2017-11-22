<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name', 'display_name', 'unit'
    ];
}

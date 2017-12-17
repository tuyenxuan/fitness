<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'title', 'description', 'image', 'video_link', 'category_id'
    ];
}

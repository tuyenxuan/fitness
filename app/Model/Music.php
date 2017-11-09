<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $fillable = [
        'title', 'description', 'image', 'video_link', 'category_id'
    ];
}

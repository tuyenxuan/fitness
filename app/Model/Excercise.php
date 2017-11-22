<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Excercise extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'title', 'image', 'description', 'content', 'video_link', 'type', 'category_id'
    ];

    public function Category()
    {
        return $this->belongsTo('App\Model\Category');
    }
}

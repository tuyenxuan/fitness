<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title', 'description', 'image', 'content', 'category_id'
    ];

    public function Category()
    {
        return $this->belongsTo('App\Model\Category');
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    const MAN = 1;
    const WOMAN = 2;
    const YOGA = 3;
    const POST = 4;
    const MUSIC = 5;

    protected $fillable = [
        'parent_category_id', 'title', 'description'
    ];

    public function excercises()
    {
        return $this->hasMany('App\Model\Excercise');
    }

    public function posts()
    {
        return $this->hasMany('App\Model\Post');
    }

    public function musics()
    {
        return $this->hasMany('App\Model\Music');
    }
}

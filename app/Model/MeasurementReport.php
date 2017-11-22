<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MeasurementReport extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'letter_id', 'member_id', 'measurement_id', 'measure', 'image'
    ];

    public function measurement()
    {
        return $this->belongsTo('App\Model\Measurement');
    }
}

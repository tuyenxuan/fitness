<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MeasurementReport extends Model
{
    protected $fillable = [
        'letter_id', 'member_id', 'measurement_id', 'measure', 'image'
    ];
}

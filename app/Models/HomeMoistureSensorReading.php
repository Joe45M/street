<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeMoistureSensorReading extends Model
{
    use HasFactory;

    public function home()
    {
        return $this->belongsTo('home');



    }
}

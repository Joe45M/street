<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function MoistureSensorReadings()
    {
        return $this->hasMany(HomeMoistureSensorReading::class);
    }
}

<?php

use App\Http\Controllers\IngestSensorDataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/sensor/ingest', [IngestSensorDataController::class, 'ingest'])
    ->name('sensor.ingest')
    ->middleware();



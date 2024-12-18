<?php

namespace App\Jobs;

use App\Models\HomeMoistureSensorReading;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class IngestSensorDataJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public $request)
    {

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $reading = new HomeMoistureSensorReading();

        $reading->home_id = $this->request['home_id'];
        $reading->reading = $this->request['reading'];

        $reading->save();
    }
}

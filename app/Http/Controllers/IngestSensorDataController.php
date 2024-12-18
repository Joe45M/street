<?php

namespace App\Http\Controllers;

use App\Jobs\IngestSensorDatajob;
use Illuminate\Http\Request;
use function Pest\Laravel\json;

class IngestSensorDataController extends Controller
{
    public function ingest(Request $request)
    {


        $request->validate([
            'home_id' => 'required|integer',
            'reading' => 'required|integer'
        ]);

        IngestSensorDatajob::dispatch($request->all());

    }
}

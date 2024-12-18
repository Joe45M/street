<?php

namespace Database\Seeders;

use App\Models\Home;
use App\Models\HomeMoistureSensorReading;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use DateInterval;
use DatePeriod;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $start = Carbon::now()->subDays(90);
        $end = Carbon::now();

        $range = collect(new DatePeriod($start, new DateInterval('P1D'), $end));

        foreach ($range as $day) {
            HomeMoistureSensorReading::factory(100)->create([
                'home_id' => 1,
                'created_at' => $day,
            ]);
        }

    }
}

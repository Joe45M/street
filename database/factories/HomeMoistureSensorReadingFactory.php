<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Psy\Util\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HomeMoistureSensorReading>
 */
class HomeMoistureSensorReadingFactory extends Factory
{
    protected static $home;
    protected static $date;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $luck = rand(0, 10);

        $overLimit = ($luck === 10);

        $readingValue = rand(0, 12000);
        if ($overLimit) {
            $readingValue = 12001 + rand(0, 500);
        }

        return [
            'home_id' => static::$home,
            'reading' => $readingValue,
            'created_at' => static::$date,
        ];
    }
}

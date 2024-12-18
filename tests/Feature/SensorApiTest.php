<?php

use Database\Seeders\DatabaseSeeder;

test('API returns successful response', function () {
    $this->seed(DatabaseSeeder::class);

    $response = $this->post('/api/v1/sensor/ingest', [
        'home_id' => 1,
        'reading' => 3
    ]);

    $response->assertStatus(200);
});

test('API returns validation error', function () {
    $this->seed(DatabaseSeeder::class);

    $response = $this->post('/api/v1/sensor/ingest');

    $response->assertStatus(422);
});

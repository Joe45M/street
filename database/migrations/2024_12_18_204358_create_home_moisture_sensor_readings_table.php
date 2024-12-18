<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('home_moisture_sensor_readings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('home_id');
            $table->bigInteger('reading');
            $table->foreign('home_id')->references('id')->on('homes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_moisture_sensor_readings');
    }
};

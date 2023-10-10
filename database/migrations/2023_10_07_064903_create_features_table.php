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
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string('feature1');
            $table->string('feature2');
            $table->string('feature3');
            $table->string('feature4');
            $table->string('icon1');
            $table->string('icon2');
            $table->string('icon3');
            $table->string('icon4');
            $table->string('description1');
            $table->string('description2');
            $table->string('description3');
            $table->string('time1');
            $table->string('time2');
            $table->string('time3');
            $table->string('day1');
            $table->string('day2');
            $table->string('day3');
            $table->string('btn1_link');
            $table->string('btn2_link');
            $table->string('btn1_name');
            $table->string('btn2_name');
            $table->string('phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('features');
    }
};

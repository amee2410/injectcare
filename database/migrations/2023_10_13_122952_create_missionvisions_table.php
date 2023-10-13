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
        Schema::create('missionvisions', function (Blueprint $table) {
            $table->id();
            $table->string('mission_title');
            $table->string('mission_image');
            $table->string('mission_description');
            $table->string('vision_title');
            $table->string('vision_image');
            $table->string('vision_description');
            $table->string('core_title');
            $table->string('core_image');
            $table->string('core_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('missionvisions');
    }
};

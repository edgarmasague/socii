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
        Schema::create('photo_metadata', function (Blueprint $table) {
            $table->id();
            $table->foreignId('photo_id')
                ->unique()
                ->constrained()
                ->cascadeOnDelete();
            $table->string('camera_make')->nullable();
            $table->string('camera_model')->nullable();
            $table->string('lens_make')->nullable();
            $table->string('lens_model')->nullable();
            $table->string('focal_length')->nullable();
            $table->string('aperture')->nullable();
            $table->string('shutter_speed')->nullable();
            $table->unsignedInteger('iso')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photo_metadata');
    }
};

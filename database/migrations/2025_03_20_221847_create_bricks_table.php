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
        Schema::create('bricks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('img_url')->nullable();
            $table->unsignedInteger('length_mm')->comment("Measured in mm");
            $table->unsignedInteger('height_mm')->comment("Measured in mm");
            $table->unsignedInteger('width_mm')->comment("Measured in mm");
            $table->boolean("is_produced")->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bricks');
    }
};

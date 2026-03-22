<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('category'); // washers, dryers, barrier-washers, ironers
            $table->string('capacity')->nullable();
            $table->text('summary')->nullable();
            $table->json('sectors')->nullable(); // ["Healthcare","Hospitality"]
            $table->json('specs')->nullable();   // {"Capacity":"10kg","Power":"3kW"}
            $table->string('image_path')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};

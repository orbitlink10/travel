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
        Schema::create('itinerary_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('itinerary_day_id')->constrained()->onDelete('cascade');
            $table->string('type'); // hotel, activity, transport, meal, etc.
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('location')->nullable();
            $table->time('time_start')->nullable();
            $table->time('time_end')->nullable();
            $table->decimal('price', 12, 2)->nullable();
            $table->integer('quantity')->default(1);
            $table->text('notes')->nullable();
            $table->json('metadata')->nullable(); // Store additional info like booking refs, URLs
            $table->timestamps();
            
            $table->index('itinerary_day_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itinerary_items');
    }
};

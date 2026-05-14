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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // hotel, activity, destination, restaurant, etc.
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('location')->nullable();
            $table->decimal('price', 12, 2)->nullable();
            $table->string('currency')->default('USD');
            $table->string('image_url')->nullable();
            $table->json('media_urls')->nullable(); // Multiple images/videos
            $table->text('amenities')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->decimal('rating', 3, 2)->nullable();
            $table->integer('reviews_count')->default(0);
            $table->json('metadata')->nullable(); // Store flexible data
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            
            $table->index('type');
            $table->index('location');
            $table->index('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

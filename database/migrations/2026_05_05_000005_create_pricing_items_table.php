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
        Schema::create('pricing_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('itinerary_item_id')->constrained()->onDelete('cascade');
            $table->decimal('cost', 12, 2)->default(0);
            $table->decimal('markup_percent', 5, 2)->default(0);
            $table->decimal('selling_price', 12, 2)->default(0);
            $table->decimal('commission', 12, 2)->nullable();
            $table->json('metadata')->nullable();
            $table->timestamps();

            $table->index('itinerary_item_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricing_items');
    }
};

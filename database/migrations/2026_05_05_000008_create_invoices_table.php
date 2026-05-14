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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agency_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('itinerary_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('proposal_id')->nullable()->constrained()->nullOnDelete();
            $table->string('number')->unique();
            $table->enum('status', ['draft', 'issued', 'paid', 'partial', 'overdue', 'cancelled'])->default('draft');
            $table->date('issue_date')->nullable();
            $table->date('due_date')->nullable();
            $table->decimal('subtotal', 12, 2)->default(0);
            $table->decimal('taxes', 12, 2)->default(0);
            $table->decimal('total', 12, 2)->default(0);
            $table->decimal('balance_due', 12, 2)->default(0);
            $table->string('currency')->default('USD');
            $table->json('metadata')->nullable();
            $table->timestamps();

            $table->index(['agency_id', 'itinerary_id', 'proposal_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};

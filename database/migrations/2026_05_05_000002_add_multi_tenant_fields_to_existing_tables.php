<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('agency_id')->nullable()->after('id')->constrained()->nullOnDelete();
        });

        DB::statement("ALTER TABLE users MODIFY role ENUM('super_admin','agency_owner','agent','client') NOT NULL DEFAULT 'agent'");

        Schema::table('clients', function (Blueprint $table) {
            $table->foreignId('agency_id')->nullable()->after('id')->constrained()->nullOnDelete();
        });

        Schema::table('itineraries', function (Blueprint $table) {
            $table->foreignId('agency_id')->nullable()->after('id')->constrained()->nullOnDelete();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('agency_id')->nullable()->after('id')->constrained()->nullOnDelete();
        });

        Schema::table('itinerary_items', function (Blueprint $table) {
            $table->foreignId('product_id')->nullable()->after('itinerary_day_id')->constrained()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('itinerary_items', function (Blueprint $table) {
            $table->dropConstrainedForeignId('product_id');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropConstrainedForeignId('agency_id');
        });

        Schema::table('itineraries', function (Blueprint $table) {
            $table->dropConstrainedForeignId('agency_id');
        });

        Schema::table('clients', function (Blueprint $table) {
            $table->dropConstrainedForeignId('agency_id');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropConstrainedForeignId('agency_id');
        });

        DB::statement("ALTER TABLE users MODIFY role ENUM('admin','agent') NOT NULL DEFAULT 'agent'");
    }
};

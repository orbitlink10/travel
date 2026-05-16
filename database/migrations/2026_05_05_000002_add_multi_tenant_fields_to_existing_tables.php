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
        if (! Schema::hasColumn('users', 'agency_id')) {
            Schema::table('users', function (Blueprint $table) {
                $table->foreignId('agency_id')->nullable()->after('id')->constrained()->nullOnDelete();
            });
        }

        if (DB::getDriverName() !== 'sqlite') {
            DB::statement("ALTER TABLE users MODIFY role ENUM('super_admin','agency_owner','agent','client') NOT NULL DEFAULT 'agent'");
        }

        if (! Schema::hasColumn('clients', 'agency_id')) {
            Schema::table('clients', function (Blueprint $table) {
                $table->foreignId('agency_id')->nullable()->after('id')->constrained()->nullOnDelete();
            });
        }

        if (! Schema::hasColumn('itineraries', 'agency_id')) {
            Schema::table('itineraries', function (Blueprint $table) {
                $table->foreignId('agency_id')->nullable()->after('id')->constrained()->nullOnDelete();
            });
        }

        if (! Schema::hasColumn('products', 'agency_id')) {
            Schema::table('products', function (Blueprint $table) {
                $table->foreignId('agency_id')->nullable()->after('id')->constrained()->nullOnDelete();
            });
        }

        if (! Schema::hasColumn('itinerary_items', 'product_id')) {
            Schema::table('itinerary_items', function (Blueprint $table) {
                $table->foreignId('product_id')->nullable()->after('itinerary_day_id')->constrained()->nullOnDelete();
            });
        }
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

        if (DB::getDriverName() !== 'sqlite') {
            DB::statement("ALTER TABLE users MODIFY role ENUM('admin','agent') NOT NULL DEFAULT 'agent'");
        }
    }
};

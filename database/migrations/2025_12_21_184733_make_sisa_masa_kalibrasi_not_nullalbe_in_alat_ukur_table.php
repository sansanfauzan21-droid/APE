<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // First, update any null values to a default value
        DB::table('alat_ukur')->whereNull('sisa_masa_kalibrasi')->update(['sisa_masa_kalibrasi' => '0 hari']);

        Schema::table('alat_ukur', function (Blueprint $table) {
            $table->string('sisa_masa_kalibrasi')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('alat_ukur', function (Blueprint $table) {
            $table->string('sisa_masa_kalibrasi')->nullable()->change();
        });
    }
};

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
        Schema::table('alat_ukur', function (Blueprint $table) {
            $table->dropColumn('sisa_masa_berlaku');
            $table->string('sisa_masa_kalibrasi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('alat_ukur', function (Blueprint $table) {
            $table->dropColumn('sisa_masa_kalibrasi');
            $table->string('sisa_masa_berlaku')->nullable();
        });
    }
};

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
            $table->dropColumn(['jenis_alat', 'no_registrasi', 'tanggal_habis_berlaku', 'lokasi_penyimpanan', 'dokumen']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('alat_ukur', function (Blueprint $table) {
            $table->string('jenis_alat')->nullable();
            $table->string('no_registrasi')->nullable();
            $table->date('tanggal_habis_berlaku');
            $table->string('lokasi_penyimpanan')->nullable();
            $table->string('dokumen')->nullable();
        });
    }
};

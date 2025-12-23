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
        Schema::create('alat_ukur', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alat');
            $table->string('jenis_alat');
            $table->string('merk');
            $table->string('tipe');
            $table->string('no_seri');
            $table->string('no_registrasi');
            $table->date('tanggal_kalibrasi');
            $table->date('tanggal_habis_berlaku');
            $table->string('sisa_masa_berlaku')->nullable();
            $table->string('lokasi_penyimpanan');
            $table->string('dokumen')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alat_ukur');
    }
};

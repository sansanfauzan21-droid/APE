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
        Schema::create('alat_bantu', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peralatan_software');
            $table->string('merk_spesifikasi');
            $table->string('nomor_alat');
            $table->string('tanggal_masa_kalibrasi');
            $table->string('sisa_masa_kalibrasi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alat_bantu');
    }
};

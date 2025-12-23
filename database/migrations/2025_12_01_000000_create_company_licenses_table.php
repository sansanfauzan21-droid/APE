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
        Schema::create('company_licenses', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_perizinan');
            $table->string('bidang');
            $table->string('sub_bidang');
            $table->string('no_sertifikat');
            $table->string('no_registrasi');
            $table->date('tanggal_habis_berlaku');
            $table->string('sisa_masa_berlaku')->nullable();
            $table->string('dokumen')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_licenses');
    }
};

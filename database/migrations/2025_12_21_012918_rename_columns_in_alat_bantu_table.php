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
        Schema::table('alat_bantu', function (Blueprint $table) {
            $table->string('nama_peralatan_software')->change();
            $table->string('merk_spesifikasi')->change();
            $table->string('nomor_alat')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Do nothing
    }
};

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlatBantuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Backend\Utilities\AlatBantu::create([
            'nama_peralatan_software' => 'Software Kalibrasi Digital',
            'merk_spesifikasi' => 'Calibration Master',
            'tipe' => 'v2.1',
            'nomor_alat' => 'SW-001',
            'tanggal_masa_kalibrasi' => '2025-12-31',
            'sisa_masa_kalibrasi' => '365 hari',
        ]);

        \App\Models\Backend\Utilities\AlatBantu::create([
            'nama_peralatan_software' => 'Termometer Digital',
            'merk_spesifikasi' => 'ThermoPro',
            'tipe' => 'TP-20',
            'nomor_alat' => 'TH-002',
            'tanggal_masa_kalibrasi' => '2025-06-15',
            'sisa_masa_kalibrasi' => '180 hari',
        ]);

        \App\Models\Backend\Utilities\AlatBantu::create([
            'nama_peralatan_software' => 'Pressure Gauge',
            'merk_spesifikasi' => 'PG',
            'tipe' => '5000 PSI',
            'nomor_alat' => 'PG-003',
            'tanggal_masa_kalibrasi' => '2025-09-20',
            'sisa_masa_kalibrasi' => '270 hari',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Backend\Utilities\AlatUkur;

class AlatUkurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alatUkurData = [
            [
                'nama_alat' => 'Multimeter Digital',
                'merk' => 'Fluke',
                'tipe' => '87V',
                'no_seri' => 'FLUKE-001',
                'tanggal_kalibrasi' => '2024-01-15',
            ],
            [
                'nama_alat' => 'Oscilloscope',
                'merk' => 'Tektronix',
                'tipe' => 'TDS 1002',
                'no_seri' => 'TEK-002',
                'tanggal_kalibrasi' => '2024-02-20',
            ],
            [
                'nama_alat' => 'Power Supply',
                'merk' => 'Agilent',
                'tipe' => 'E3631A',
                'no_seri' => 'AGI-003',
                'tanggal_kalibrasi' => '2024-03-10',
            ],
            [
                'nama_alat' => 'Signal Generator',
                'merk' => 'Rohde & Schwarz',
                'tipe' => 'SMB100A',
                'no_seri' => 'RS-004',
                'tanggal_kalibrasi' => '2024-04-05',
            ],
            [
                'nama_alat' => 'Spectrum Analyzer',
                'merk' => 'Keysight',
                'tipe' => 'N9010A',
                'no_seri' => 'KEY-005',
                'tanggal_kalibrasi' => '2024-05-12',
            ],
        ];

        foreach ($alatUkurData as $data) {
            AlatUkur::create($data);
        }
    }
}

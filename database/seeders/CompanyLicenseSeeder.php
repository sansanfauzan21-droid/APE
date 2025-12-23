<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Backend\Utilities\CompanyLicense;

class CompanyLicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $licenses = [
            [
                'jenis_perizinan' => 'Izin Usaha',
                'bidang' => 'Energi',
                'sub_bidang' => 'Minyak dan Gas',
                'no_sertifikat' => 'SERT-001',
                'no_registrasi' => 'REG-001',
                'tanggal_habis_berlaku' => '2025-12-31',
                'sisa_masa_berlaku' => '1 tahun',
                'dokumen' => '#'
            ],
            [
                'jenis_perizinan' => 'Sertifikasi',
                'bidang' => 'Konstruksi',
                'sub_bidang' => 'Pembangunan',
                'no_sertifikat' => 'SERT-002',
                'no_registrasi' => 'REG-002',
                'tanggal_habis_berlaku' => '2026-06-15',
                'sisa_masa_berlaku' => '1.5 tahun',
                'dokumen' => '#'
            ],
            [
                'jenis_perizinan' => 'Lisensi',
                'bidang' => 'Transportasi',
                'sub_bidang' => 'Logistik',
                'no_sertifikat' => 'SERT-003',
                'no_registrasi' => 'REG-003',
                'tanggal_habis_berlaku' => '2024-09-20',
                'sisa_masa_berlaku' => '6 bulan',
                'dokumen' => '#'
            ],
            [
                'jenis_perizinan' => 'Izin Operasional',
                'bidang' => 'Perdagangan',
                'sub_bidang' => 'Elektronik',
                'no_sertifikat' => 'SERT-004',
                'no_registrasi' => 'REG-004',
                'tanggal_habis_berlaku' => '2027-03-10',
                'sisa_masa_berlaku' => '2 tahun',
                'dokumen' => '#'
            ],
            [
                'jenis_perizinan' => 'Perizinan Berbasis Risiko',
                'bidang' => 'Industri',
                'sub_bidang' => 'Manufaktur',
                'no_sertifikat' => 'SERT-005',
                'no_registrasi' => 'REG-005',
                'tanggal_habis_berlaku' => '2025-11-05',
                'sisa_masa_berlaku' => '9 bulan',
                'dokumen' => '#'
            ]
        ];

        foreach ($licenses as $license) {
            CompanyLicense::create($license);
        }
    }
}

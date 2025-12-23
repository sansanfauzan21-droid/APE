<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Utilities\CompanyLicense;
use App\Models\Backend\Utilities\AlatUkur;

class LegalitasController extends Controller
{
    public function index()
    {
        $title = 'Legalitas Perusahaan';

        // Fetch data from database
        $companyLicenses = CompanyLicense::orderBy('id')->get();

        // Transform data for frontend display
        $perusahaanData = $companyLicenses->map(function ($license, $index) {
            return [
                'no' => $index + 1,
                'jenis_perizinan' => $license->jenis_perizinan,
                'bidang' => $license->bidang,
                'sub_bidang' => $license->sub_bidang,
                'no_sertifikat' => $license->no_sertifikat,
                'no_registrasi' => $license->no_registrasi,
                'tanggal_habis_berlaku' => $license->tanggal_habis_berlaku->format('d/m/Y'),
                'sisa_masa_berlaku' => $license->sisa_masa_berlaku,
                'dokumen' => $license->dokumen ? asset('storage/' . $license->dokumen) : '#'
            ];
        })->toArray();

        return view('frontend.legalitas.index', compact('title', 'perusahaanData'));
    }

    public function alatUkur()
    {
        $title = 'Alat Ukur';

        // Fetch data from database
        $alatUkurs = AlatUkur::orderBy('id')->get();

        // Transform data for frontend display
        $alatUkurData = $alatUkurs->map(function ($alat, $index) {
            return [
                'no' => $index + 1,
                'nama_alat' => $alat->nama_alat,
                'merk_spesifikasi' => $alat->merk . ' ' . $alat->tipe,
                'nomor_alat' => $alat->no_seri,
                'tanggal_kalibrasi' => $alat->tanggal_kalibrasi,
                'sisa_masa_kalibrasi' => $alat->sisa_masa_kalibrasi ?: '-'
            ];
        })->toArray();

        return view('frontend.legalitas.alat-ukur', compact('title', 'alatUkurData'));
    }

    public function alatBantu()
    {
        $title = 'Alat Bantu';

        // Fetch data from database
        $alatBantus = \App\Models\Backend\Utilities\AlatBantu::orderBy('id')->get();

        // Transform data for frontend display
        $alatUBantuData = $alatBantus->map(function ($alat, $index) {
            return [
                'no' => $index + 1,
                'nama_alat' => $alat->nama_peralatan_software,
                'merk_spesifikasi' => $alat->merk_spesifikasi . ' ' . $alat->tipe,
                'nomor_alat' => $alat->nomor_alat,
                'tanggal_kalibrasi' => $alat->tanggal_masa_kalibrasi,
                'sisa_masa_kalibrasi' => $alat->sisa_masa_kalibrasi ?: '-'
            ];
        })->toArray();

        return view('frontend.legalitas.alat-bantu', compact('title', 'alatUBantuData'));
    }
}

<?php

namespace App\Models\Backend\Utilities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlatBantu extends Model
{
    use HasFactory;

    protected $table = 'alat_bantu';

    protected $fillable = [
        'nama_peralatan_software',
        'merk_spesifikasi',
        'tipe',
        'nomor_alat',
        'tanggal_masa_kalibrasi',
        'sisa_masa_kalibrasi',
    ];
}

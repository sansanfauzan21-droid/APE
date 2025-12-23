<?php

namespace App\Models\Backend\Utilities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyLicense extends Model
{
    use HasFactory;

    protected $table = 'company_licenses';

    protected $fillable = [
        'jenis_perizinan',
        'bidang',
        'sub_bidang',
        'no_sertifikat',
        'no_registrasi',
        'tanggal_habis_berlaku',
        'sisa_masa_berlaku',
        'dokumen'
    ];

    protected $casts = [
        'tanggal_habis_berlaku' => 'date',
    ];
}

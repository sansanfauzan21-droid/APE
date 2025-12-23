<?php

namespace App\Models\Backend\Utilities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlatUkur extends Model
{
    use HasFactory;

    protected $table = 'alat_ukur';

    protected $fillable = [
        'nama_alat',
        'merk',
        'tipe',
        'no_seri',
        'tanggal_kalibrasi',
        'sisa_masa_kalibrasi',
    ];

    protected $dates = [
        'tanggal_kalibrasi',
    ];

    public function getSisaMasaBerlakuAttribute()
    {
        if ($this->tanggal_habis_berlaku) {
            $now = now();
            $diff = $now->diff($this->tanggal_habis_berlaku);

            if ($diff->invert) {
                return 'Expired';
            }

            return $diff->y . ' tahun ' . $diff->m . ' bulan ' . $diff->d . ' hari';
        }

        return '-';
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratKetKematian extends Model
{
    protected $table = 'surat_ket_kematian';
    protected $fillable = [
        'nik',
        'nama',
        'tanggal_lahir',
        'tempat_lahir',
        'bangsa',
        'agama',
        'pekerjaan',
        'tempat_tinggal',
        'tanggal_wafat',
        'tempat_wafat',
        'tempat_pemakaman',
        'status',
        'nomor_surat',
        'tanggal_cetak',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'tanggal_wafat' => 'date',
        'tanggal_cetak' => 'datetime',
    ];
}

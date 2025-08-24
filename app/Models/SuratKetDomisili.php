<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratKetDomisili extends Model
{
    protected $table = 'surat_ket_domisili';
    protected $fillable = [
        'nik',
        'nama',
        'tanggal_lahir',
        'tempat_lahir',
        'bangsa',
        'agama',
        'pekerjaan',
        'tempat_tinggal',
        'keperluan',
        'status',
        'nomor_surat',
        'tanggal_cetak',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'tanggal_cetak' => 'datetime',
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratKetUsaha extends Model
{
    protected $table = 'surat_ket_usaha';
    protected $fillable = [
        'nik',
        'nama',
        'tanggal_lahir',
        'tempat_lahir',
        'jenis_kelamin',
        'status_perkawinan',
        'bangsa',
        'agama',
        'pekerjaan',
        'tempat_tinggal',
        'nama_usaha',
        'tempat_usaha',
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

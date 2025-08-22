<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = 'surat';
    protected $fillable = [
        'nik',
        'nama',
        'tanggal_lahir',
        'tempat_lahir', // Tambahkan
        'bangsa',       // Tambahkan
        'agama',        // Tambahkan
        'pekerjaan',    // Tambahkan
        'tempat_tinggal', // Tambahkan
        'jenis_surat',
        'keperluan',    // Tambahkan
        'dokumen',
        'status',
        'nomor_surat',
        'tanggal_cetak',
        'tanggal_buat', // Tambahkan
    ];

    protected $casts = [
        'tanggal_lahir' => 'date:Y-m-d',
        'tanggal_cetak' => 'datetime:Y-m-d',
        'tanggal_buat' => 'datetime:Y-m-d',
    ];
}

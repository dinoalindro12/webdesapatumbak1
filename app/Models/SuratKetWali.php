<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratKetWali extends Model
{
    protected $table = 'surat_ket_wali';
    protected $fillable = [
        // Data Pemohon (Wali)
        'nik',
        'nama',
        'tanggal_lahir',
        'tempat_lahir',
        'bangsa',
        'agama',
        'pekerjaan',
        'tempat_tinggal',
        
        // Data Anak
        'nik_anak',
        'nama_anak',
        'tanggal_lahir_anak',
        'tempat_lahir_anak',
        'bangsa_anak',
        'agama_anak',
        'pekerjaan_anak',
        'tempat_tinggal_anak',
        
        // Lain-lain
        'keperluan',
        'status',
        'nomor_surat',
        'tanggal_cetak',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'tanggal_lahir_anak' => 'date',
        'tanggal_cetak' => 'datetime',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Beranda extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'total_penduduk',
        'anggaran_desa',
        'jumlah_program',
        'aktivitas_terkini',
        'jumlah_umkm',
        'prestasi',
        'keberhasilan',
        'anggaran_terpakai'
    ];

    
   
}
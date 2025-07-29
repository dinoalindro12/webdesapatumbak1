<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    /** @use HasFactory<\Database\Factories\UmkmFactory> */
    use HasFactory;
    
    protected $table = 'umkms';
    protected $fillable = [
        'nama_usaha', 'jenis_usaha', 'lokasi_usaha', 'foto', 'kontak'
    ];
}

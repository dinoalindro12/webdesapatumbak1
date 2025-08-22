<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    /** @use HasFactory<\Database\Factories\PendidikanFactory> */
    use HasFactory;
    protected $fillable = [
        'nama_institusi',
        'tahun_berdiri',
        'tingkat_pendidikan',
        'alamat',
        'akreditasi'
    ];
}

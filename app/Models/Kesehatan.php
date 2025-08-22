<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kesehatan extends Model
{
    /** @use HasFactory<\Database\Factories\KesehatanFactory> */
    use HasFactory;

    protected $table = 'kesehatans';
    protected $fillable = [
        'aktivitas_program', 
        'nama_program',
        'jam_pelayanan',
        'tanggal_pelayanan',
        'lokasi_pelayanan',
    ];

}

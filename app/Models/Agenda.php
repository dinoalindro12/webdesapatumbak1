<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    /** @use HasFactory<\Database\Factories\AgendaFactory> */
    use HasFactory;
    protected $fillable = [
        'nama_proyek',
        'waktu_mulai',
        'besar_anggaran',
        'ukuran_proyek',
        'status',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Bumdes extends Model
{
    use HasFactory;
    protected $table = 'bumdes';
    protected $fillable = [
        'nama', 'tanggal_peresmian', 'profil', 'visi', 'misi', 'bidang_usaha',
        'direktur', 'bendahara', 'koordinator_pertanian', 'koordinator_keuangan',
        'foto_direktur', 'foto_bendahara', 'foto_pertanian', 'foto_keuangan',
        'omset_tahunan', 'tenaga_kerja', 'shu_desa'
    ];
}

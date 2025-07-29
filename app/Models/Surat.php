<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = 'surat';
    protected $fillable = [
        'nik', 'nama', 'tanggal_lahir', 'no_hp', 'jenis_surat', 'alasan', 'dokumen', 'status'
    ];
}

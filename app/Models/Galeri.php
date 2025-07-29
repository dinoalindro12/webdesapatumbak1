<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeri';
    
    protected $fillable = [
        'gambar',
        'keterangan_gambar',
        'link_video',
        'keterangan_video',
        'tanggal',
        'kategori',
    ];

    protected static function boot()
    {
        parent::boot();
        
        // Hapus file gambar saat model dihapus
        static::deleting(function ($galeri) {
            if ($galeri->gambar) {
                Storage::disk('public')->delete($galeri->gambar);
            }
        });
    }
}

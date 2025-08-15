<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Galeri extends Model
{
    protected $table = 'galeri';
    
    protected $fillable = [
        'type',
        'gambar',
        'keterangan_gambar',
        'link_video',
        'keterangan_video',
        'tanggal',
    ];

    protected $casts = [
        'tanggal' => 'date',
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

    // Method untuk mendapatkan ID YouTube dari URL
    public function getYoutubeIdAttribute()
    {
        if (!$this->link_video) {
            return null;
        }

        $pattern = '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/';
        preg_match($pattern, $this->link_video, $matches);
        
        return isset($matches[1]) ? $matches[1] : null;
    }

    // Method untuk mendapatkan thumbnail YouTube
    public function getYoutubeThumbnailAttribute()
    {
        $youtubeId = $this->youtube_id;
        
        if ($youtubeId) {
            return "https://img.youtube.com/vi/{$youtubeId}/0.jpg";
        }
        
        return null;
    }

    // Scope untuk filtering
    public function scopeFilterByType($query, $type)
    {
        if ($type && in_array($type, ['foto', 'video'])) {
            return $query->where('type', $type);
        }
        return $query;
    }

    // Accessor untuk URL gambar lengkap
    public function getGambarUrlAttribute()
    {
        if ($this->gambar) {
            return asset('storage/' . $this->gambar);
        }
        return null;
    }
}
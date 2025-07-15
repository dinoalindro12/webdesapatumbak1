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
        'jumlah_penduduk',
        'aktivitas_terkini',
        'jumlah_umkm',
        'prestasi',
        'keberhasilan',
        'anggaran_terpakai',

    ];

    /**
     * The attributes that should be cast.
     *

     * Get the persentase penggunaan anggaran.
     */
    protected function persentaseAnggaran(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->anggaran_desa > 0 
                ? round(($this->anggaran_terpakai / $this->anggaran_desa) * 100, 2)
                : 0,
        );
    }

    /**
     * Get the greeting based on current time.
     */
    public static function getGreeting(): string
    {
        $hour = now()->hour;
        
        return match(true) {
            $hour >= 5 && $hour < 11 => 'Pagi',
            $hour >= 11 && $hour < 15 => 'Siang',
            $hour >= 15 && $hour < 18 => 'Sore',
            default => 'Malam',
        };
    }

    /**
     * Get active services.
     */
    public function getActiveServices(): array
    {
        return [
            'surat' => $this->layanan_surat_aktif,
            'perizinan' => $this->layanan_perizinan_aktif,
            'pembayaran' => $this->layanan_pembayaran_aktif,
        ];
    }

    /**
     * Get monthly indicators data.
     */
    public function getMonthlyIndicators(int $year): array
    {
        // You can replace this with actual query to beranda_indikator_bulanan table
        // if you decide to use separate table for monthly data
        return $this->data_bulanan[$year] ?? array_fill(1, 12, [
            'pertumbuhan' => 0,
            'keterangan' => 'Data belum tersedia'
        ]);
    }

    /**
     * Get current achievements.
     */
    public function getAchievements(): array
    {
        return [
            [
                'icon' => 'check',
                'color' => 'indigo',
                'title' => $this->prestasi_judul ?? 'Desa Digital Terbaik',
                'description' => $this->prestasi_deskripsi ?? 'Penghargaan sebagai Desa Digital Terbaik tingkat Kabupaten tahun 2023',
            ],
            [
                'icon' => 'trending-up',
                'color' => 'green',
                'title' => 'Peningkatan Ekonomi',
                'description' => 'Pertumbuhan ekonomi desa meningkat 15% dibanding tahun sebelumnya',
            ]
        ];
    }
}
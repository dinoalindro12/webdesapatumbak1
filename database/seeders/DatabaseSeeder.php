<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Beranda;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'role' => 'admin',
        ]);

        Beranda::truncate();

        Beranda::create([
            'total_penduduk'      => 3772,
            'anggaran_desa'       => 842034612.71,
            'jumlah_program'      => '20',
            'aktivitas_terkini'   => 'Fugit provident in nihil animi.',
            'jumlah_umkm'         => '13',
            'prestasi'            => 'Ipsa est sunt ex eligendi aut nemo.',
            'keberhasilan'        => 'Voluptatem impedit deleniti inventore quasi autem quod.',
            'anggaran_terpakai'   => 648783818.79,
        ]);
    }
}

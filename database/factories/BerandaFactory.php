<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BerandaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'total_penduduk' => fake()->numberBetween(1000, 5000),
            'anggaran_desa' => fake()->randomFloat(2, 500000000, 2000000000),
            'jumlah_program' => fake()->numberBetween(1, 20),
            'aktivitas_terkini' => fake()->sentence(),
            'jumlah_umkm' => fake()->numberBetween(10, 100),
            'prestasi' => fake()->sentence(),
            'keberhasilan' => fake()->sentence(),
            'anggaran_terpakai' => fake()->randomFloat(2, 100000000, 1500000000),
        ];
    }
}

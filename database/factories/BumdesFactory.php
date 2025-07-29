<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class BumdesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category_name = fake()->sentence(rand(1, 3));
        return [
            'nama' => $category_name,
            'tanggal_peresmian' => fake()->date(),
            'profil' => fake()->paragraph(),
            'visi' => fake()->sentence(),
            'misi' => fake()->sentence(),
            'bidang_usaha' => fake()->sentence(),
            'direktur' => fake()->name(),
            'bendahara' => fake()->name(),
            'koordinator_pertanian' => fake()->name(),
            'koordinator_keuangan' => fake()->name(),
            'foto_direktur' => fake()->imageUrl(),
            'foto_bendahara' => fake()->imageUrl(),
            'foto_pertanian' => fake()->imageUrl(),
            'foto_keuangan' => fake()->imageUrl(),
            'omset_tahunan' => fake()->numberBetween(1000000,20000000),
            'tenaga_kerja' => fake()->numberBetween(1, 50),
            'shu_desa' => fake()->numberBetween(100000, 5000000)
            
            
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition(): array
    {
        $title = fake()->sentence(rand(6, 8));
        return [
            'slug' => Str::slug($title),
            'title' => $title,
            'date' => fake()->unique()->date(),
            'body' => fake()->paragraph(),
            'image' => fake()->imageUrl(),
            'author_id' => User::factory(),
            'kategori' => fake()->randomElement(['Pemerintahan', 'Pendidikan', 'Kesehatan','Ekonomi']), // Assuming you have predefined categories
            'category_id'=> Category::factory(), // Assuming you have a Category factory
            // 'status' => fake()->randomElement(['draft', 'published
            
            
        ];
    }
}

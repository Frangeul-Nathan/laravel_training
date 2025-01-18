<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Juste utilisé pour faire de fausses données, utile pour les tests et le développement.
        return [
            'user_id'=> 1,
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(20),
        ];
    }
}

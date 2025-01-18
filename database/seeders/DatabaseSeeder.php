<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Juste utilisé pour faire de fausses données, utile pour les tests et le développement. Appel de la factory Post pour créer 15 articles.
        Post::factory(15)->create();
    }
}

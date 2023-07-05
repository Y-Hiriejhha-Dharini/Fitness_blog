<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Category::factory(3)->create();
        Post::factory(10)
            ->has(Comment::factory()->count(3))
            ->create();
        // $user = User::factory()->create([
        //     'name' => 'Dharini'
        // ]);

        // $this->call([
        //     UserSeeder::class,
        //     CategorySeeder::class,
        //     PostSeeder::class,
        // ]);

        // Post::factory(3)->create([
        //     'user_id' => $user->id,
        // ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

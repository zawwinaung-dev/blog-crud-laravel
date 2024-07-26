<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Article::factory(20)->create();
        \App\Models\Comment::factory(40)->create();

        $categories = ['News', 'Tech', 'Web', 'Mobile', 'Oss'];
        foreach($categories as $category) {
            \App\Models\Category::create(['name' => $category]);
        }
        
        User::factory()->create([
            'name' => 'Alice',
            'email' => 'alice@gmail.com',
        ]);

        User::factory()->create([
            'name' => 'Bob',
            'email' => 'bob@gmail.com',
        ]);
    }
}

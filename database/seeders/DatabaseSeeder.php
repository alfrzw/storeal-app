<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        Product::factory(200)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create([
            'name' => 'Hoodie',
            'slug' => 'hoodie'
        ]);

        Category::create([
            'name' => 'T-shirt',
            'slug' => 't-shirt'
        ]);

        Category::create([
            'name' => 'Cap',
            'slug' => 'cap'
        ]);
    }
}

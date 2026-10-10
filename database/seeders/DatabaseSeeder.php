<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat 1 Akun Admin
        User::factory()->create([
            'name' => 'Admin E-Commerce',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // 2. Buat 5 Kategori
        Category::factory(5)->create();

        // 3. Buat 50 Produk secara acak
        Product::factory(50)->create();
    }
}
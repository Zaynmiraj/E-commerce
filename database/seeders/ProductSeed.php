<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $faker = Faker::create();

        // Generate fake data for users
        for ($i = 0; $i < 10; $i++) {
            \App\Models\Product::create([
                'product_name' => $faker->name,
                'product_slug' => Str::slug($faker->name),
                'category_id' => 3, // You can customize password generation as needed
                'description' => $faker->paragraph(3),
                'product_id' => fake()->unique()->text(10),
                'image' => 'img'.$faker->randomFloat(1,2),
            ]);
        }
    }
}
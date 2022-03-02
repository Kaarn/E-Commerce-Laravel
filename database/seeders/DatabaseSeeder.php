<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker::create();

        for ($i=0; $i < 20; $i++)
        DB::table('products')->insert([
            'name' => $this->faker->word(4),
            'description' => $this->faker->text(150),
            'price' => rand(1, 2000),
            'slug' => $this->faker->slug(1),
            'favorite' => $this->faker->boolean(),
            'color' => rand(0, 3),
            'cover' => $this->faker->imageUrl(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
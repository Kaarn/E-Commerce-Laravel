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

        for ($i=0; $i < 10; $i++)
        DB::table('products')->insert([
            'name' => $this->faker->word(4),
            'description' => $this->faker->text(300),
            'price' => rand(1, 2000),
            'slug' => $this->faker->slug(1),
            'favorite' => $this->faker->boolean(),
            'cover' => 'https://e-leclerc.scene7.com/is/image/gtinternet/0194252165867_1?op_sharpen=1&resmode=bilin&fmt=pjpeg&qlt=85&wid=450&fit=fit,1&hei=450',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kostan;
use Faker\Factory as Faker;

class KostanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Generate random data for kostans
        for ($i = 0; $i < 10; $i++) {
            Kostan::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'image' => $faker->imageUrl()
            ]);
        }
    }
}
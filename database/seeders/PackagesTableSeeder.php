<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Package::create([
            'package_name' => fake()->word,
            'package_type' => fake()->word,
            'price' => fake()->numberBetween(1, 1000),
            'number_of_days' => rand(1,30),
            'number_of_aminities' => rand(1,30),
            'number_of_nearest_place' => rand(1,30),
            'number_of_photo' => rand(1,30),
            'number_of_property' => rand(1,30),
            'number_of_feature_property' => rand(1,30),
            'number_of_top_property' => rand(1,30),
            'number_of_urgent_property' =>rand(1,30),
            'status' => rand(0,1),
            'is_featured' => rand(1,30),
            'is_top' => rand(1,30),
            'is_urgent' => rand(1,30),
            'package_order' => rand(1,30),
            'created_at' => fake()->dateTime,
            'updated_at' => fake()->dateTime
        ]);
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'package_name' => fake()->word,
            'package_type' => fake()>word,
            'price' => fake()->numberBetween(1, 1000),
            'number_of_days' => fake()>numberBetween(1, 30),
            'number_of_aminities' => fake()->numberBetween(1, 20),
            'number_of_nearest_place' => fake()>numberBetween(1, 10),
            'number_of_photo' => fake()->numberBetween(1, 50),
            'number_of_property' => fake()->numberBetween(1, 100),
            'number_of_feature_property' => fake()->numberBetween(1, 10),
            'number_of_top_property' => fake()->numberBetween(1, 5),
            'number_of_urgent_property' => fake()->numberBetween(1, 5),
            'status' => fake()->numberBetween(0, 1),
            'is_featured' => fake()->numberBetween(0, 1),
            'is_top' => fake()->numberBetween(0, 1),
            'is_urgent' => fake()->numberBetween(0, 1),
            'package_order' => fake()->numberBetween(1, 100),
            'created_at' => fake()->dateTime,
            'updated_at' => fake()->dateTime
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'order_id' => fake()->unique()->regexify('[0-9]{10}'),
            'user_id' => rand(1, 10),
            'package_id' => rand(1, 5),
            'purchase_date' => fake()->date(),
            'expired_day' => 365,
            'expired_date' => fake()->date(),
            'payment_method' => fake()->randomElement(['PayPal', 'Credit Card', 'Bank Transfer']),
            'transaction_id' => fake()->regexify('[a-z]{26}'),
            'payment_status' => fake()->boolean(),
            'amount_usd' => fake()->numberBetween(1, 1000),
            'amount_real_currency' => fake()->numberBetween(1, 100000),
            'currency_type' => fake()->randomElement(['USD', 'EUR', 'GBP']),
            'currency_icon' => fake()->randomElement(['$', '€', '£']),
            'status' => fake()->boolean
        ];
    }
}

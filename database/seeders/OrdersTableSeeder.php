<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds. php artisan db:seed --class=OrdersTableSeeder
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'order_id' =>  Str::random(10),
            'user_id' => 1,
            'package_id' => 2,
            'purchase_date' => '2022-01-01',
            'expired_day' => 365,
            'expired_date' => '2023-01-01',
            'payment_method' => 'PayPal',
            'transaction_id' => 'abcdefghijklmnopqrstuvwxyz',
            'payment_status' => 1,
            'amount_usd' => 100,
            'amount_real_currency' => 10000,
            'currency_type' => 'USD',
            'currency_icon' => '$',
            'status' => 1,
        ]);
    }
}

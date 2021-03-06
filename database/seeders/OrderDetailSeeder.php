<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('order_details')->truncate();
        DB::table('order_details')->insert([
            [
                'id'=>1,
                'product_id' => 1,
                'order_id' => 1,
                'quantity' => '1',
                'amount' => '200000',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'id'=>2,
                'product_id' => 2,
                'order_id' => 2,
                'quantity' => '2',
                'amount' => '1200000',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'id'=>3,
                'product_id' => 3,
                'order_id' => 3,
                'quantity' => '3',
                'amount' => '2200000',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'id'=>4,
                'product_id' => 4,
                'order_id' => 4,
                'quantity' => '3',
                'amount' => '3200000',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'id'=>5,
                'product_id' => 5,
                'order_id' => 5,
                'quantity' => '4',
                'amount' => '4200000',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],[
                'id'=>6,
                'product_id' => 6,
                'order_id' => 1,
                'quantity' => '5',
                'amount' => '5200000',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],[
                'id'=>7,
                'product_id' => 7,
                'order_id' => 2,
                'quantity' => '6',
                'amount' => '6200000',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'id'=>8,
                'product_id' => 8,
                'order_id' => 3,
                'quantity' => '7',
                'amount' => '7200000',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'id'=>9,
                'product_id' => 9,
                'order_id' => 4,
                'quantity' => '8',
                'amount' => '8200000',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'id'=>10,
                'product_id' => 10,
                'order_id' => 5,
                'quantity' => '9',
                'amount' => '9200000',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'id'=>11,
                'product_id' => 1,
                'order_id' => 1,
                'quantity' => '1',
                'amount' => '300000',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'id'=>12,
                'product_id' => 2,
                'order_id' => 2,
                'quantity' => '2',
                'amount' => '1300000',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'id'=>13,
                'product_id' => 3,
                'order_id' => 3,
                'quantity' => '3',
                'amount' => '2300000',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'id'=>14,
                'product_id' => 4,
                'order_id' => 4,
                'quantity' => '3',
                'amount' => '3300000',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'id'=>15,
                'product_id' => 5,
                'order_id' => 5,
                'quantity' => '4',
                'amount' => '4300000',
                'created_at' => Carbon::now()->day(-1),
                'updated_at' => Carbon::now()->day(-1),
            ],
            [
                'id'=>16,
                'product_id' => 6,
                'order_id' => 1,
                'quantity' => '5',
                'amount' => '5300000',
                'created_at' => Carbon::now()->day(-1),
                'updated_at' => Carbon::now()->day(-1),
            ],
            [
                'id'=>17,
                'product_id' => 7,
                'order_id' => 2,
                'quantity' => '6',
                'amount' => '6300000',
                'created_at' => Carbon::now()->day(-1),
                'updated_at' => Carbon::now()->day(-1),
            ],
            [
                'id'=>18,
                'product_id' => 8,
                'order_id' => 3,
                'quantity' => '7',
                'amount' => '7300000',
                'created_at' => Carbon::now()->day(-1),
                'updated_at' => Carbon::now()->day(-1),
            ],
            [
                'id'=>19,
                'product_id' => 9,
                'order_id' => 4,
                'quantity' => '8',
                'amount' => '8300000',
                'created_at' => Carbon::now()->day(-1),
                'updated_at' => Carbon::now()->day(-1),
            ],
            [
                'id'=>20,
                'product_id' => 10,
                'order_id' => 5,
                'quantity' => '9',
                'amount' => '9300000',
                'created_at' => Carbon::now()->day(-1),
                'updated_at' => Carbon::now()->day(-1),
            ],
            [
                'id'=>21,
                'product_id' => 1,
                'order_id' => 1,
                'quantity' => '1',
                'amount' => '400000',
                'created_at' => Carbon::now()->day(-1),
                'updated_at' => Carbon::now()->day(-1),
            ],
            [
                'id'=>22,
                'product_id' => 2,
                'order_id' => 2,
                'quantity' => '1',
                'amount' => '1400000',
                'created_at' => Carbon::now()->day(-1),
                'updated_at' => Carbon::now()->day(-1),
            ],
            [
                'id'=>23,
                'product_id' => 3,
                'order_id' => 3,
                'quantity' => '2',
                'amount' => '2400000',
                'created_at' => Carbon::now()->day(-1),
                'updated_at' => Carbon::now()->day(-1),
            ],
            [
                'id'=>24,
                'product_id' => 4,
                'order_id' => 4,
                'quantity' => '3',
                'amount' => '3400000',
                'created_at' => Carbon::now()->day(-1),
                'updated_at' => Carbon::now()->day(-1),
            ],
            [
                'id'=>25,
                'product_id' => 5,
                'order_id' => 5,
                'quantity' => '4',
                'amount' => '5400000',
                'created_at' => Carbon::now()->day(-1),
                'updated_at' => Carbon::now()->day(-1),
            ],
            [
                'id'=>26,
                'product_id' => 6,
                'order_id' => 1,
                'quantity' => '5',
                'amount' => '5400000',
                'created_at' => Carbon::now()->day(-1),
                'updated_at' => Carbon::now()->day(-1),
            ],
            [
                'id'=>27,
                'product_id' => 7,
                'order_id' => 2,
                'quantity' => '6',
                'amount' => '6400000',
                'created_at' => Carbon::now()->day(-1),
                'updated_at' => Carbon::now()->day(-1),
            ],
            [
                'id'=>28,
                'product_id' => 8,
                'order_id' => 3,
                'quantity' => '7',
                'amount' => '7400000',
                'created_at' => Carbon::now()->day(-1),
                'updated_at' => Carbon::now()->day(-1),
            ],
            [
                'id'=>29,
                'product_id' => 9,
                'order_id' => 4,
                'quantity' => '8',
                'amount' => '8400000',
                'created_at' => Carbon::now()->day(-1),
                'updated_at' => Carbon::now()->day(-1),
            ],
            [
                'id'=>30,
                'product_id' => 10,
                'order_id' => 5,
                'quantity' => '9',
                'amount' => '9400000',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

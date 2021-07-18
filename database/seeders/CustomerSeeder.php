<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('customers')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('customers')->insert([
            [
                'id' => 1,
                'name' => 'Nguyễn Ngọc Thuận ',
                'address' => 'Ngõ 20 Hồ Tùng Mậu',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),

            ],
            [
                'id' => 2,
                'name' => 'Đào Hồng Luyến',
                'address' => 'Ngõ 21 Hồ Tùng Mậu',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),

            ],
            [
                'id' => 3,
                'name' => 'Bùi Thọ Hoàng ',
                'address' => 'Ngõ 22 Hồ Tùng Mậu',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'id' => 4,
                'name' => 'Đỗ Đức Quân ',
                'address' => 'Ngõ 23 Hồ Tùng Mậu',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),

            ],[
                'id' => 5,
                'name' => 'Nguyễn Xuân Hiệp ',
                'address' => 'Ngõ 24 Hồ Tùng Mậu',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
        ]);
    }
}

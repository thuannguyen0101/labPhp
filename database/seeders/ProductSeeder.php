<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('products')->truncate();

        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Trạm cảnh sát tuần tra & cứu hỏa biển',
                'price' => '1,399,000 VNĐ',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'id' => 2,
                'name' => 'Trại cứu hộ động vật hoang dã',
                'price' => '1,399,000 VNĐ',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'id' => 3,
                'name' => 'Trạm cảnh sát tuần tra & cứu hỏa biển',
                'price' => '2,999,000 VNĐ',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'id' => 4,
                'name' => 'Xe địa hình cứu hộ',
                'price' => '1,399,000 VNĐ',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'id' => 5,
                'name' => 'Xe cứu hộ động vật hoang dã',
                'price' => '399,000 VNĐ',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],[
                'id' => 6,
                'name' => 'Thị Trấn Sôi Động',
                'price' => '2,399,000 VNĐ',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],[
                'id' => 7,
                'name' => 'Xe Tải Vận Chuyển Mô Tô Địa Hình',
                'price' => '454,000 VNĐ',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],[
                'id' => 8,
                'name' => 'Xe Và Cano Cứu Hộ Biển ATV',
                'price' => '319,000 VNĐ',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],[
                'id' => 9,
                'name' => 'Xe Ô Tô Thể Thao',
                'price' => '399,000 VNĐ',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],[
                'id' => 10,
                'name' => 'Trực Thăng Cứu Hỏa',
                'price' => '599,000 VNĐ',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');


    }
}

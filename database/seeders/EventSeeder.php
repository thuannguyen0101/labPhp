<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->truncate();
        DB::table('events')->insert([
            [
                'id' => 1,
                'eventName' => 'Tết Dương Lịch',
                'bandNames' => 'zero 9',
                'startDate' => '2021-01-01',
                'endDate' => '2021-01-02',
                'portfolio' => 'TẾT',
                'ticketPrice' => '1000000',
                'status' => '3',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),

            ],
            [
                'id' => 2,
                'eventName' => 'Lễ tình nhân ',
                'bandNames' => 'Dlab',
                'startDate' => '2024-02-14',
                'endDate' => '2024-02-15',
                'portfolio' => 'chưa biết',
                'ticketPrice' => '150000',
                'status' => '3',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),

            ],
            [
                'id' => 3,
                'eventName' => 'Tết Trung Thu',
                'bandNames' => 'the sky',
                'startDate' => '2021-08-15',
                'endDate' => '2021-08-16',
                'portfolio' => 'Chưa xác định',
                'ticketPrice' => '10000000',
                'status' => '0',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'id' => 4,
                'eventName' => 'Ngày Doanh nhân Việt Nam',
                'bandNames' => 'the cray',
                'startDate' => '2021-10-13',
                'endDate' => '2021-10-14',
                'portfolio' => 'Hôi Doanh Nhân VN',
                'ticketPrice' => '1000000',
                'status' => '2',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),

            ],
            [
                'id' => 5,
                'eventName' => 'Ngày Thương binh Liệt sĩ',
                'bandNames' => 'Đoàn Văn Nghệ',
                'startDate' => '2021-07-27',
                'endDate' => '2021-07-28',
                'portfolio' => 'BỘ ',
                'ticketPrice' => '100000000',
                'status' => '2',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),

            ],
            [
                'id' => 6,
                'eventName' => 'Ngày Quốc tế Thiếu nhi',
                'bandNames' => 'Xuân Mai',
                'startDate' => '2021-07-17',
                'endDate' => '2021-07-18',
                'portfolio' => 'BỘ',
                'ticketPrice' => '10000000',
                'status' => '1',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),

            ],
            [
                'id' => 7,
                'eventName' => 'Lễ Giáng Sinh',
                'bandNames' => 'THE HAPPY',
                'startDate' => '2021-12-25',
                'endDate' => '2021-12-26',
                'portfolio' => 'ABY',
                'ticketPrice' => '1000000',
                'status' => '0',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),

            ],
        ]);
    }
}

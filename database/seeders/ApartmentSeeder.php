<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('apartments')->truncate();
        DB::table('apartments')->insert([
            [
                'id' => 1,
                'apartmentName' => 'Nguyễn Ngọc Thuận ',
                'address' => 'Ngõ 20 Hồ Tùng Mậu',
                'price'=> '34,26',
                'status'=> 1,
                'general_information'=> 'Diện tích: 54 m²',
                'detailed_information'=> 'Số phòng ngủ: 2 phòng',
                'avatar'=> 'https://cdn.chotot.com/eYuzD6Gvkd1oHLfXLZ_sjewyDKEs0Ld0uJilKhRlSSo/preset:view/plain/aede282371639c93529c143d63402fa1-2718250917866064572.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),

            ],
            [
                'id' => 2,
                'apartmentName' => 'Căn hộ cao cấp resgreen tower ',
                'address' => 'Ngõ 21 Hồ Tùng Mậu',
                'price'=> '51,29',
                'general_information'=> 'Diện tích: 62 m²',
                'detailed_information'=> 'Loại hình căn hộ: Chung cư',
                'avatar'=> 'https://cdn.chotot.com/T-CFJjvqJrlqfW5deqMmkDvJICd_6E3qOoDpP61U2w0/preset:view/plain/0e84908bfb840c03fd81a88321eeb7e6-2727481921797089732.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
                'status'=> 1,

            ],
            [
                'id' => 3,
                'apartmentName' => ' CĂN HỘ Q7 SAIGON RIVERSIDE ',
                'address' => 'Ngõ 22 Hồ Tùng Mậu',
                'price'=> '34,91',
                'general_information'=> 'Diện tích: 53 m²',
                'detailed_information'=> 'Loại hình căn hộ: Chung cư',
                'avatar'=> 'https://cdn.chotot.com/pGLCKVFae_uQeASx1LdsfcKFsantP1VbWvfzhxaS9IY/preset:view/plain/f655eceb1190c2068177d2d23ba9dadf-2714383372728665740.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
                'status'=> 1,

            ],
            [
                'id' => 4,
                'apartmentName' => '2PN Vinhomes Q  ',
                'address' => 'Ngõ 23 Hồ Tùng Mậu',
                'price'=> '36,61',
                'general_information'=> 'Diện tích: 59 m²',
                'detailed_information'=> 'Loại hình căn hộ: Chung cư',
                'avatar'=> 'https://cdn.chotot.com/iAbkH0jpnMm9RTqMCBRj5QcqE9oufT8J01-bbArpYtg/preset:view/plain/30dfd9765dd64616be726951f42c7853-2723269805084681469.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
                'status'=> 1,

            ],
            [
                'id' => 5,
                'apartmentName' => 'DUPLEX CELADON CITY 158M2 4PN VIEW ',
                'address' => 'Ngõ 24 Hồ Tùng Mậu',
                'price'=> '41,14',
                'general_information'=> 'Diện tích: 158 m²',
                'detailed_information'=> 'Hướng ban công: Đông Nam',
                'avatar'=> 'https://cdn.chotot.com/eYuzD6Gvkd1oHLfXLZ_sjewyDKEs0Ld0uJilKhRlSSo/preset:view/plain/aede282371639c93529c143d63402fa1-2718250917866064572.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
                'status'=> 1,

            ],
            [
                'id' => 6,
                'apartmentName' => 'Brilliant, 3PN 131m2,',
                'address' => 'Ngõ 25 Hồ Tùng Mậu',
                'price'=> '51,53',
                'general_information'=> 'Diện tích: 131 m²',
                'detailed_information'=> 'Số phòng ngủ: 3 phòng',
                'avatar'=> 'https://cdn.chotot.com/lWjpq_cPGsRwqhvHQ7tOZK2d7WJCZr3DxNYkTGJIet4/preset:view/plain/7b78778a8c6c1befa1706f92f9aefee3-2724637532902659542.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
                'status'=> 1,

            ],
            [
                'id' => 7,
                'apartmentName' => 'Chung cư Quận 8 80m² 3PN ',
                'address' => 'Ngõ 26 Hồ Tùng Mậu',
                'price'=> '25',
                'general_information'=> 'Diện tích: 80 m²',
                'detailed_information'=> 'Số phòng ngủ: 3 phòng',
                'avatar'=> 'https://cdn.chotot.com/iLiy-RE9sG52--EIkRDY1wLXcLjHyZ4nqcjU7nBbxDU/preset:view/plain/745aeddea46e5264191e591fa507a1c0-2716617728705921092.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
                'status'=> 1,

            ],
            [
                'id' => 8,
                'apartmentName' => 'Flora Kikyo',
                'address' => 'Ngõ 27 Hồ Tùng Mậu',
                'price'=> '40,15',
                'general_information'=> 'Diện tích: 68 m²',
                'detailed_information'=> 'Số phòng ngủ: 2 phòng',
                'avatar'=> 'https://cdn.chotot.com/8dkkTZkpV2fdSY-MDZIgJ0J77kQBGPhnVBu20AHL6UU/preset:view/plain/00a0a01d90dfe39c5570400a04d5a598-2708963730202232393.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
                'status'=> 2,
            ],
            [
                'id' => 9,
                'apartmentName' => 'LAVITA CHARM THỦ ĐỨC',
                'address' => 'Ngõ 28 Hồ Tùng Mậu',
                'price'=> ' 43,48',
                'general_information'=> 'Diện tích: 54 m²',
                'detailed_information'=> 'Số phòng ngủ: 2 phòng',
                'avatar'=> 'https://cdn.chotot.com/M938OA6oBcxzXw6p-dj1vR88iE42b6TJyfSg60Q-UHs/preset:property_project_default/plain/2710_sample_house_7.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
                'status'=> 2,

            ],
            [
                'id' => 10,
                'apartmentName' => '2PN Alnata view Đông Nam',
                'address' => 'Ngõ 29 Hồ Tùng Mậu',
                'price'=> '61,73',
                'general_information'=> 'Diện tích: 81.1 m²',
                'detailed_information'=> 'Loại hình căn hộ: Chung cư',
                'avatar'=> 'https://cdn.chotot.com/lsI_DN_dago25T6UQZcYXGLf7shsBfoc1spBbAbJX28/preset:view/plain/f0bf20a7ea5a58f920c1ec0d05dd5db7-2720133022780344964.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
                'status'=> 2,

            ],
            [
                'id' => 11,
                'apartmentName' => 'CĂN LAVITA CHARM ',
                'address' => 'Ngõ 30 Hồ Tùng Mậu',
                'price'=> '29,1',
                'general_information'=> 'Diện tích: 67 m²',
                'detailed_information'=> 'Số phòng ngủ: 2 phòng',
                'avatar'=> 'https://cdn.chotot.com/OLm-AzMtxwQ_EVdadJHhsIiIXxrQiY6_D7naWiPrSzI/preset:property_project_default/plain/2710_sample_house_5.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
                'status'=> 2,

            ],
            [
                'id' => 12,
                'apartmentName' => 'Nam Long CK ',
                'address' => 'Ngõ 31 Hồ Tùng Mậu',
                'price'=> '29,75',
                'general_information'=> 'Diện tích: 121 m²',
                'detailed_information'=> 'Số phòng ngủ: 2 phòng',
                'avatar'=> 'https://cdn.chotot.com/pTO0ML7a1USmmeYzfzFXYb1XW2BiFrtQIiDYqPMHAJk/preset:view/plain/7ceaa029c5ecccb7a56d623de31f4133-2710279028672589490.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
                'status'=> 2,

            ],
            [
                'id' => 13,
                'apartmentName' => 'Prosper Plaza',
                'address' => 'Ngõ 32 Hồ Tùng Mậu',
                'price'=> '34,07',
                'general_information'=> 'Diện tích: 54 m²',
                'detailed_information'=> 'Số phòng ngủ: 2 phòng',
                'avatar'=> 'https://cdn.chotot.com/qbwY52VwsvvUaYcqrTsAHW0Own4ReXG1D9GIHKlH_hs/preset:view/plain/cddd494f02a5306f9377927dd1b81f92-2723904558331881625.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
                'status'=> 2,

            ],
            [
                'id' => 14,
                'apartmentName' => 'Topaz Elite',
                'address' => 'Ngõ 33 Hồ Tùng Mậu',
                'price'=> '28,57',
                'general_information'=> 'Diện tích: 70 m²',
                'detailed_information'=> 'Tình trạng nội thất: Hoàn thiện cơ bản',
                'avatar'=> 'https://cdn.chotot.com/p48FAGeituONXleI6Y8haqvs1xEsr2E52AAiDBzZYkY/preset:view/plain/ea2c124f9c2178cfeddd7e6b33429544-2684199622261384141.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
                'status'=> 2,
            ],
            [
                'id' => 15,
                'apartmentName' => ' CH AKARI CITY',
                'address' => 'Ngõ 34 Hồ Tùng Mậu',
                'price'=> '37,5',
                'general_information'=> 'Diện tích: 56 m²',
                'detailed_information'=> 'Tình trạng nội thất: Hoàn thiện cơ bản',
                'avatar'=> 'https://cdn.chotot.com/LYBZu0ltkOz0y66dxMXeOwWI4rIzMgFONwJ17F_W824/preset:view/plain/dc36a2154fb6142263d623fc49c81cb0-2724332626926651824.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
                'status'=> 3,

            ],
            [
                'id' => 16,
                'apartmentName' => ' Lavita Charm',
                'address' => 'Ngõ 35 Hồ Tùng Mậu',
                'price'=> '42,54',
                'general_information'=> 'Diện tích: 67.3 m²',
                'detailed_information'=> 'Loại hình căn hộ: Chung cư',
                'avatar'=> 'https://cdn.chotot.com/PNtRF9vc6K1kVpTB7rGMZq9OU2vr6Bq_ByYd0eF_V64/preset:view/plain/d29c19a17bf83b95004e0f2bc490937d-2721431632691600541.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
                'status'=> 3,

            ],
            [
                'id' => 17,
                'apartmentName' => 'Park Legend',
                'address' => 'Ngõ 36 Hồ Tùng Mậu',
                'price'=> '76,7',
                'general_information'=> 'Diện tích: 88.9 m²',
                'detailed_information'=> 'Số phòng ngủ: 3 phòng',
                'avatar'=> 'https://cdn.chotot.com/6k7duZOexIP9fvLHVyaTvUnf6q7UAwpPMStGrOT_VRY/preset:view/plain/8c4b138210247d9eec81814c6c44e9ca-2730100652774673899.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
                'status'=> 3,

            ],
            [
                'id' => 18,
                'apartmentName' => 'Akari City ',
                'address' => 'Ngõ 37 Hồ Tùng Mậu',
                'price'=> ' 34,23',
                'general_information'=> 'Diện tích: 84 m²',
                'detailed_information'=> 'Loại hình căn hộ: Chung cư',
                'avatar'=> 'https://cdn.chotot.com/ZnR0vTIE1xPo0EPtFdLxHqz9b4r5Ljc3SBkynO9KXlA/preset:view/plain/011dccc7d33b0745ff8388acefe53bb3-2708070981570288306.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
                'status'=> 3,
            ],
            [
                'id' => 19,
                'apartmentName' => ' Akari City',
                'address' => 'Ngõ 28 Hồ Tùng Mậu',
                'price'=> '38,39',
                'general_information'=> 'Diện tích: 56 m²',
                'detailed_information'=> 'Loại hình căn hộ: Chung cư',
                'avatar'=> 'https://cdn.chotot.com/eYuzD6Gvkd1oHLfXLZ_sjewyDKEs0Ld0uJilKhRlSSo/preset:view/plain/aede282371639c93529c143d63402fa1-2718250917866064572.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
                'status'=> 3,
            ],
            [
                'id' => 20,
                'apartmentName' => 'Duplex 4Pn 152m Emerald',
                'address' => 'Ngõ 29 Hồ Tùng Mậu',
                'price'=> '42,11',
                'general_information'=> 'Diện tích: 152 m²',
                'detailed_information'=> 'Số phòng ngủ: 4 phòng',
                'avatar'=> 'https://cdn.chotot.com/df5aG66nvQIkTe9OEKyc-tzJqb9Zl-w2C0wzu6FIeSo/preset:view/plain/e68577d16ef8ce13c9d3a34e288f27e1-2723178578943993150.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
                'status'=> 3,
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

}

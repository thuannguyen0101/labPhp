<?php

namespace Database\Seeders;

use App\Http\Controllers\EventController;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            EventSeeder::class,
            OrderDetailSeeder::class,
            ProductSeeder::class,
            CustomerSeeder::class,
            OrderSeeder::class,

        ]);
    }
}

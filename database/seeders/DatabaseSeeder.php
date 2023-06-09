<?php

namespace Database\Seeders;

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
            UserSeeder::class,
            StateSeeder::class,
            CitySeeder::class,
            RouteSeeder::class,
            TollboothSeeder::class,
            FuelSeeder::class,
            ClasificationSeeder::class,
            UnitSeeder::class,
            RateSeeder::class,
            //TransportSeeder::class
        ]);
    }
}

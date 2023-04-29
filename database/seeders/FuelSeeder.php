<?php

namespace Database\Seeders;

use App\Models\Fuel;
use Illuminate\Database\Seeder;

class FuelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fuel::create([
            'combustible' => 'Gasolina Magna',
            'precio' => 22.02
        ]);

        Fuel::create([
            'combustible' => 'Gasolina Premiun',
            'precio' => 24.15
        ]);

        Fuel::create([
            'combustible' => 'Pemex diesel',
            'precio' => 23.61
        ]);

        Fuel::create([
            'combustible' => 'Gas LP',
            'precio' => 14.44
        ]);
    }
}

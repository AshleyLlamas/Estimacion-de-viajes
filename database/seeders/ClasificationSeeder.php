<?php

namespace Database\Seeders;

use App\Models\Clasification;
use Illuminate\Database\Seeder;

class ClasificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clasification::create([
            'clasificación' => 'Motocicleta'
        ]);

        Clasification::create([
            'clasificación' => 'Automovil'
        ]);

        Clasification::create([
            'clasificación' => 'Autobús de 2 a 4 ejes'
        ]);
    }
}

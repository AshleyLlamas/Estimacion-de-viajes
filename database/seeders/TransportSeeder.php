<?php

namespace Database\Seeders;

use App\Models\Transport;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transport::create([
            'fecha' => Carbon::now()->toDateTimeString(),
            'ciudadOrigen_id' => $ciudadDeOrigen->id,
            'ciudadDestino_id' => City::all()->except($ciudadDeOrigen)->random()->id,
            'unit_id' => $unidad->id,
            'precio' => 0
        ]);
    }
}

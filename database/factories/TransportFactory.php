<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Unit;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $ciudadDeOrigen = City::all()->random()->id;

        // $unidad = Unit::all()->random();

        // switch($unidad->clasification){
        //     case 1:
        //         $peaje =
        //     break;
        //     case 2:
        //     break;
        // }

        // return [
        //     'fecha' => Carbon::now()->toDateTimeString(),
        //     'ciudadOrigen_id' => $ciudadDeOrigen->id,
        //     'ciudadDestino_id' => City::all()->except($ciudadDeOrigen)->random()->id,
        //     'unit_id' => $unidad->id,
        //     'precio' => 0
        // ];
    }
}

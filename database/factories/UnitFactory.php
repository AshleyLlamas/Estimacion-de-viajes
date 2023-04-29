<?php

namespace Database\Factories;

use App\Models\Clasification;
use App\Models\Fuel;
use Illuminate\Database\Eloquent\Factories\Factory;

class UnitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        switch($this->faker->numberBetween(1, 5)){
            case 1:
                $linea = 'Primera Plus';
            break;
            case 2:
                $linea = 'Turistar Lujo';
            break;
            case 3:
                $linea = 'Tufesa Platinum';
            break;
            case 4:
                $linea = 'Primera Plus';
            break;
            case 5:
                $linea = 'Transportes Chihuahuenses';
            break;
        }


        return [
            'unidad' => $this->faker->numberBetween(10, 99),
            'linea' => $linea,
            'placa' => strtoupper($this->faker->bothify('???-###-??#')),
            'asientos' => $this->faker->numberBetween(6, 20),
            'fuel_id' => Fuel::all()->random()->id,
            'clasification_id' => Clasification::all()->random()->id
        ];
    }
}

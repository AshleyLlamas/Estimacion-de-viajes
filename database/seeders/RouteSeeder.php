<?php

namespace Database\Seeders;

use App\Models\Route;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Route::create([
            'nombre' => 'Tijuana - Ensenada (1D)',
            'longitud' => '68.685',
            'tiempo' => '00:41:00'
        ])->cities()->attach([6,2]);

        Route::create([
            'nombre' => 'Tecate - Tijuana (2D)',
            'longitud' => 27.220,
            'tiempo' => '0:16:00'
        ])->cities()->attach([5,6]);

        Route::create([
            'nombre' => 'Rumorosa - Tecate (2D)',
            'longitud' => 55.336,
            'tiempo' => '00:30:00'
        ])->cities()->attach([5]);

        Route::create([
            'nombre' => 'El Centinela - La Rumorosa (2D)',
            'longitud' => 20.841,
            'tiempo' => '00:17:00'
        ])->cities()->attach([1,5]);

        Route::create([
            'nombre' => 'Libramiento de Mexicali (2D)',
            'longitud' => 68.406,
            'tiempo' => '00:58:00'
        ])->cities()->attach([1]);
    }
}

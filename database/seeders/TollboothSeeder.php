<?php

namespace Database\Seeders;

use App\Models\Clasification;
use App\Models\Rate;
use App\Models\Tollbooth;
use Illuminate\Database\Seeder;

class TollboothSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tollbooth::create([
            'nombre' => 'La rumorosa',
        ])->routes()->attach([3,4]);

        Tollbooth::create([
            'nombre' => 'El Hongo',
        ])->routes()->attach([2,3]);

        Tollbooth::create([
            'nombre' => 'El renacimiento',
        ])->routes()->attach([2]);

        Tollbooth::create([
            'nombre' => 'Ottay',
        ])->routes()->attach([2]);
    }
}

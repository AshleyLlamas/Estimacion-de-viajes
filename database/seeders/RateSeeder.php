<?php

namespace Database\Seeders;

use App\Models\Rate;
use Illuminate\Database\Seeder;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rate::create([
            'peaje' => 15.00,
            'tollbooth_id' => 1,
            'clasification_id' => 1
        ]);

        Rate::create([
            'peaje' => 30,
            'tollbooth_id' => 1,
            'clasification_id' => 2
        ]);

        Rate::create([
            'peaje' => 114,
            'tollbooth_id' => 1,
            'clasification_id' => 3
        ]);

        Rate::create([
            'peaje' => 19,
            'tollbooth_id' => 2,
            'clasification_id' => 1
        ]);

        Rate::create([
            'peaje' => 39,
            'tollbooth_id' => 2,
            'clasification_id' => 2
        ]);

        Rate::create([
            'peaje' => 81,
            'tollbooth_id' => 2,
            'clasification_id' => 3
        ]);

        Rate::create([
            'peaje' => 42,
            'tollbooth_id' => 3,
            'clasification_id' => 1
        ]);

        Rate::create([
            'peaje' => 84,
            'tollbooth_id' => 3,
            'clasification_id' => 2
        ]);

        Rate::create([
            'peaje' => 153,
            'tollbooth_id' => 3,
            'clasification_id' => 3
        ]);

        Rate::create([
            'peaje' => 75,
            'tollbooth_id' => 4,
            'clasification_id' => 1
        ]);

        Rate::create([
            'peaje' => 151,
            'tollbooth_id' => 4,
            'clasification_id' => 2
        ]);

        Rate::create([
            'peaje' => 224,
            'tollbooth_id' => 4,
            'clasification_id' => 3
        ]);
    }
}

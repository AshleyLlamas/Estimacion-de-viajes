<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'PRUEBAS',
            'email' => 'example.program.view@gmail.com',
            'password' => bcrypt('servidordepruebas'),
        ]);

        User::factory(30)->create();
    }
}

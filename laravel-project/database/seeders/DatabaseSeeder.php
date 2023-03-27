<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Song;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory()->create(
        //     [
        //         'name' => 'Ayoub',
        //         'email' => 'elgountari@gmail.com',
        //         'password' => 'qwer1234',
        //         'role' => 'admin'
        //     ]
        // );

        Song::factory(10)->create();


    }
}

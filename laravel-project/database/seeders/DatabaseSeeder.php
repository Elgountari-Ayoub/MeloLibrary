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
        User::factory()->create(
            [
                'name' => 'Ayoub',
                'email' => 'elgountari@gmail.com',
                'role' => 'admin'
            ]
        );
        User::factory()->create(
            [
                'name' => 'Karim',
                'email' => 'karim@gmail.com',
            ]
        );
    }
}

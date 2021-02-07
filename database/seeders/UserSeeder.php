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
            'first_name' => 'Miguel',
            'last_name' => 'Mateo',
            'profession' => 'Programmer',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'first_name' => 'Harry',
            'last_name' => 'Potter',
            'profession' => 'Magician',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'first_name' => 'Alex',
            'last_name' => 'Rodríguez',
            'profession' => 'Baseball player',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'profession' => 'programmer',
        ]);

        User::create([
            'first_name' => 'George',
            'last_name' => 'Clooney',
            'profession' => 'actor',
        ]);

        User::create([
            'first_name' => 'Nelson',
            'last_name' => 'Batista',
            'profession' => 'teacher',
        ]);
    }
}

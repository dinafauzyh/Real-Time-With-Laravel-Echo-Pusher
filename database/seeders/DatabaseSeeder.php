<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        collect([

            [
                'name' => 'Muhammad Faris Fauzi',
                'email' => 'farisfauzi231@chattyy.com',
                'password' => bcrypt('password'),
                'username' => 'farisfauzi'
            ],

            [
                'name' => 'Nadhifa Khanza Elvina',
                'email' => 'nadhifaKhanza@chattyy.com',
                'password' => bcrypt('password'),
                'username' => 'nadhifaa'
            ],

        ])->each(fn ($user) => User::create($user));

        \App\Models\User::factory(10)->create();
    }
}

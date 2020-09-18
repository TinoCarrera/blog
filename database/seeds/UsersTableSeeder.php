<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Florentino Carrera',
            'email' => 'florentino@carrera.me',
            'password' => bcrypt('password')
        ]);
    }
}

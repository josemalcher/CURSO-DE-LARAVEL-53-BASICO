<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'José Malcher',
            'email'=> 'contato@josemalcher.net',
            'password'=> bcrypt('123456')
        ]);
    }
}

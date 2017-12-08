<?php

use Illuminate\Database\Seeder;

class UsersTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'level' => enum('admin'),
            'remember_token' => string('null'),
        ]);
    }
}

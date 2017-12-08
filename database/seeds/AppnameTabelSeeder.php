<?php

use Illuminate\Database\Seeder;

class AppnameTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appname')->insert([
            'app_name' => 'Dimas Recovery',
            'app_description' => 'adalah jasa penyelamatan data (data recovery service) yang berbasis di Yogyakarta.',
            'app_location' => 'Yogyakarta Indonesia',
            'app_email' => 'recoveryhardrive@gmail.com',
            'app_phone' => '085803256647',
        ]);
    }
}

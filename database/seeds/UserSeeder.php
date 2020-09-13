<?php

use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
>>>>>>> 373d37e3791dae0e0379ad040a688e9264169e32

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
<<<<<<< HEAD
            'name' => Aleyna,
            'email' => 'infoaleyna@gmail.com',
            'password' => Hash::make('852963'),
=======
            'name' => 'İbrahim',
            'email' => 'info@kerimcaglar.com',
            'password' => Hash::make('123456'),
>>>>>>> 373d37e3791dae0e0379ad040a688e9264169e32
        ]);
    }
}

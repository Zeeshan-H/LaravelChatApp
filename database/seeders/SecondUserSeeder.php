<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class SecondUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users2')->insert(array(
            array(
                'name' => 'Arslan',
                'email' => 'arslan@gmail.com',
                'password' => Hash::make('123456')
            ),
        ));
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert(array(
            array(
                'name' => 'Ahmed',
                'email' => 'ahmed@gmail.com',
                'password' => '1234'
            ),
            array(
                'name' => 'Zeeshan',
                'email' => 'zeeshan@gmail.com',
                'password' => '1234'
            ),
        ));

    }
}

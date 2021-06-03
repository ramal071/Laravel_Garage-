<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // need type
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // login eka
        \DB::table('users')->insert([
            'name'=>'bbb',
            'email'=>'bbb@test.com',
            'password'=>Hash::make('bbb')  
        ]);
    }
}

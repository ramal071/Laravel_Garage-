<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // need type

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('services')->insert([
            [
                'name'=>'nimal',
                "price"=>"300",
                "category"=>"honda",

            ],
            [
                'name'=>'amal',
                "price"=>"400",
                "category"=>"ct100",    ],
            [
                'name'=>'kamal',
                "price"=>"500",
                "category"=>"honet",
                    
            ],
            [
                'name'=>'sunil',
                "price"=>"200",               
                "category"=>"fz",
             ]
        ]);
    }
}
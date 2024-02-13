<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
          //Admin 
            [
                'name'=>'Admin',
                'cin'=>'0000000',
                'numTel'=>'0000000000',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('123456789'),
                'role'=>'Admin',
            ],
           //Doctor 
           [
            'name'=>'Doctor',
            'cin'=>'11111111',
            'numTel'=>'1111111111',
            'email'=>'Doctor@gmail.com',
            'password'=>Hash::make('123456789'),
            'role'=>'Doctor',

        ],
         //Patient 
         [
            'name'=>'Patient',
            'cin'=>'22222222',
            'numTel'=>'2222222222',
            'email'=>'Patient@gmail.com',
            'password'=>Hash::make('123456789'),
            'role'=>'Patient',
        ],


    ]);
    }
}

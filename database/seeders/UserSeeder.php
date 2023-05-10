<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        $data =[
            [
                'name' =>  'Arief Hyda',
                'email' =>  'admin@gmail.com',
                'password' =>  password_hash('1', PASSWORD_ARGON2ID),
                'phone' =>  '08156998969',
                'level' =>  '1',
            ], 
            [
                'name' =>  'John',
                'email' =>  'john@gmail.com',
                'password' =>  password_hash('1', PASSWORD_ARGON2ID),
                'phone' =>  '08156998969',
                'level' =>  '2',
            ]     
        ];
        DB::table('users')->insert($data);
    }
}

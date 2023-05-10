<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bank')->truncate();
        $data =[
            [
                'name' =>  'BRI',
                'number' =>  '09876544345',
            ], 
            [
                'name' =>  'MANDIRI',
                'number' =>  '098761111345',
            ],    
        ];
        DB::table('bank')->insert($data);
    }
}

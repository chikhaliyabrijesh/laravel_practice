<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
           
            'name'=>'Brijesh Chikhaliya',
            'mobile'=>9712742575,
            'email'=>'brijesh@gmail.com',
            'password'=>'12345',
            'address'=>'Rajkot',
            'created_at'=>'2023-02-03',
            'updated_at'=>'2023-02-03'
        ]);
    }
}

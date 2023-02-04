<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([

            'firstname'=>'brijesh',
            'lastname'=>'patel',
            'email'=>'brijesh@gmail.com',
            'mobile'=>9712742575,
            'subject'=>'hii',
            'message'=>'hii',
            'created_at'=>"2023-02-03",
            'updated_at'=>"2023-02-03"
        ]);
    }
}

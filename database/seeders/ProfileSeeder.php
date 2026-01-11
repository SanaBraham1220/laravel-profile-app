<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("profiles")->insert([
            'name' => Str::random(10),
            'password'=>Hash::make('password'),
            'email' =>  Str::random(30).'@gmail.com',
            'bio' => Str::random(255)
        ]);
    }
}
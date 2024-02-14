<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('master_users')->insert([
            'username' => "SuperAdmin",
            'email' => "superadmin@gmail.com",
            'nama' => "SuperAdmin",
            'password' => Hash::make('SuperAdmin123'),
            'role' => "SuperAdmin",
            'status' => "active",
        ]);
        DB::table('master_users')->insert([
            'username' => "kader1",
            'email' => "kader@gmail.com",
            'nama' => "kader1",
            'password' => Hash::make('Kader123'),
            'role' => "Kader",
            'status' => "active",
        ]);
    }
}
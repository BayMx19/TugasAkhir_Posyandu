<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class KaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('master_kader')->insert([
            'email' => "kader@gmail.com",
            'nama' => "kader1",
            'jabatan' => "Ketua",
            'tgl_gabung' => Carbon::now(),
            'alamat' => "Jalan Panceng",
            'rt' => "01",
            'rw' => "02",
            'no_telp' => "081234567890",
            'status' => "active",
        ]);
    }
}

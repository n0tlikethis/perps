<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('anggota')->insert([
            [
                'nama' => 'Rifki',
                'jenis_kelamin' => 'L',
                'alamat' => 'Jl. Sana No.5, Rogojampi',
                'telp' => '081234567890',
            ],
            [
                'nama' => 'Wahyu',
                'jenis_kelamin' => 'L',
                'alamat' => 'Jl. Cungking No.10, Banyuwangi',
                'telp' => '082345678901',
            ],
            [
                'nama' => 'Nisa',
                'jenis_kelamin' => 'P',
                'alamat' => 'Jl. Serena No.3, Genteng',
                'telp' => '083456789012',
            ]
        ]);
    }
}

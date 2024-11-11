<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('petugas')->insert([
            [
                'username' => 'admin',
                'password' => 'admin',
                'nama' => 'Saya Admin',
                'telp' => '081234567890',
                'alamat' => 'Jl. Raya No.99, Banyuwangi',
            ],
            [
                'username' => 'petugas1',
                'password' => '123',
                'nama' => 'Isma',
                'telp' => '082345678901',
                'alamat' => 'Jl. Petugas No.1, Banyuwangi',
            ],
            [
                'username' => 'petugas2',
                'password' => '321',
                'nama' => 'Fariz',
                'telp' => '083456789012',
                'alamat' => 'Jl. Petugas No.2, Banyuwangi',
            ]
        ]);
    }
}

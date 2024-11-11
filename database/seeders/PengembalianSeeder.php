<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengembalianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pengembalian
        DB::table('pengembalian')->insert([
            [
                'tanggal_pengembalian' => '2024-08-14',
                'denda' => 10000,
                'peminjaman_id' => 1,
                'anggota_id' => 1,
                'petugas_id' => 1,
            ],
            [
                'tanggal_pengembalian' => '2024-08-19',
                'denda' => 15000,
                'peminjaman_id' => 2,
                'anggota_id' => 2,
                'petugas_id' => 2,
            ],
            [
                'tanggal_pengembalian' => '2024-09-30',
                'denda' => 0,
                'peminjaman_id' => 3,
                'anggota_id' => 3,
                'petugas_id' => 3,
            ]
        ]);

        // Pengembalian Detail
        DB::table('pengembalian_detail')->insert([
            [
                'pengembalian_id' => 1,
                'buku_id' => 1,
            ],
            [
                'pengembalian_id' => 1,
                'buku_id' => 2,
            ],
            [
                'pengembalian_id' => 2,
                'buku_id' => 3,
            ],
            [
                'pengembalian_id' => 2,
                'buku_id' => 1,
            ],
            [
                'pengembalian_id' => 3,
                'buku_id' => 2,
            ]
        ]);
    }
}

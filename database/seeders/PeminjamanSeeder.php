<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Peminjaman
        DB::table('peminjaman')->insert([
            [
                'tanggal_pinjam' => '2024-08-09',
                'tanggal_kembali' => '2024-08-12',
                'anggota_id' => 1,
                'petugas_id' => 1,
            ],
            [
                'tanggal_pinjam' => '2024-08-11',
                'tanggal_kembali' => '2024-08-16',
                'anggota_id' => 2,
                'petugas_id' => 2,
            ],
            [
                'tanggal_pinjam' => '2024-09-23',
                'tanggal_kembali' => '2024-10-01',
                'anggota_id' => 3,
                'petugas_id' => 3,
            ]
        ]);

        // Peminjaman Detail
        DB::table('peminjaman_detail')->insert([
            [
                'peminjaman_id' => 1,
                'buku_id' => 1,
            ],
            [
                'peminjaman_id' => 1,
                'buku_id' => 2,
            ],
            [
                'peminjaman_id' => 2,
                'buku_id' => 3,
            ],
            [
                'peminjaman_id' => 2,
                'buku_id' => 1,
            ],
            [
                'peminjaman_id' => 3,
                'buku_id' => 2,
            ]
        ]);
    }
}

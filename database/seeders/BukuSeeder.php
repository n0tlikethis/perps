<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pengarang
        DB::table('pengarang')->insert([
            [
                'nama' => 'Raden Ajeng Kartini',
                'alamat' => 'Jl. Kartini No.7, Jepara',
                'telp' => '081234567890',
            ],
            [
                'nama' => 'Pramoedya Ananta Toer',
                'alamat' => 'Jl. Pemuda No.15, Blora',
                'telp' => '082345678901',
            ],
            [
                'nama' => 'Andrea Hirata',
                'alamat' => 'Jl. Cendana No.3, Belitung',
                'telp' => '083456789012',
            ]
        ]);

        // Penerbit
        DB::table('penerbit')->insert([
            [
                'nama' => 'Gramedia Pustaka Utama',
                'alamat' => 'Jl. Pahlawan No.9, Jakarta',
                'telp' => '081234567890',
            ],
            [
                'nama' => 'Bentang Pustaka',
                'alamat' => 'Jl. Raya No.8, Yogyakarta',
                'telp' => '082345678901',
            ],
            [
                'nama' => 'Mizan',
                'alamat' => 'Jl. Cendana No.2, Bandung',
                'telp' => '083456789012',
            ]
        ]);

        // Rak
        DB::table('rak')->insert([
            [
                'kode_rak' => 'RAK001',
                'lokasi' => 'Lantai 1, Ruang A',
            ],
            [
                'kode_rak' => 'RAK002',
                'lokasi' => 'Lantai 1, Ruang B',
            ],
            [
                'kode_rak' => 'RAK003',
                'lokasi' => 'Lantai 2, Ruang C',
            ]
        ]);

        // Buku
        DB::table('buku')->insert([
            [
                'judul' => 'Laskar Pelangi',
                'tahun_terbit' => 2005,
                'jumlah' => 10,
                'isbn' => '120983192084',
                'pengarang_id' => 1,
                'penerbit_id' => 1,
                'rak_kode_rak' => 'RAK001',
            ],
            [
                'judul' => 'Bumi Manusia',
                'tahun_terbit' => 1980,
                'jumlah' => 5,
                'isbn' => '232347298347',
                'pengarang_id' => 2,
                'penerbit_id' => 2,
                'rak_kode_rak' => 'RAK002',
            ],
            [
                'judul' => 'Pendidikan Kewarganegaraan',
                'tahun_terbit' => 2012,
                'jumlah' => 7,
                'isbn' => '129038134872',
                'pengarang_id' => 3,
                'penerbit_id' => 3,
                'rak_kode_rak' => 'RAK003',
            ]
        ]);
    }
}

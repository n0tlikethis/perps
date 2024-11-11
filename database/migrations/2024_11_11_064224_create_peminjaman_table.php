<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->integer('id')->primary()->autoIncrement();
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->integer('anggota_id');
            $table->integer('petugas_id');

            $table
                ->foreign('anggota_id')
                ->references('id')
                ->on('anggota');
            $table
                ->foreign('petugas_id')
                ->references('id')
                ->on('petugas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};

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
        Schema::create('pengembalian', function (Blueprint $table) {
            $table->integer('id')->primary()->autoIncrement();
            $table->date('tanggal_pengembalian');
            $table->integer('denda')->default(0);
            $table->integer('peminjaman_id');
            $table->integer('anggota_id');
            $table->integer('petugas_id');

            $table
                ->foreign('peminjaman_id')
                ->references('id')
                ->on('peminjaman');
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
        Schema::dropIfExists('pengembalian');
    }
};

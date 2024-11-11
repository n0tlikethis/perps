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
        Schema::create('buku', function (Blueprint $table) {
            $table->integer('id')->primary()->autoIncrement();
            $table->string('judul', length: 100);
            $table->integer('tahun_terbit');
            $table->integer('jumlah');
            $table->string('isbn', length: 45);
            $table->integer('pengarang_id');
            $table->integer('penerbit_id');
            $table->string('rak_kode_rak', length: 10);

            $table
                ->foreign('pengarang_id')
                ->references('id')
                ->on('pengarang');
            $table
                ->foreign('penerbit_id')
                ->references('id')
                ->on('penerbit');
            $table
                ->foreign('rak_kode_rak')
                ->references('kode_rak')
                ->on('rak');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};

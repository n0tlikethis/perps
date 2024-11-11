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
        Schema::create('pengembalian_detail', function (Blueprint $table) {
            $table->integer('pengembalian_id');
            $table->integer('buku_id');

            $table
                ->foreign('pengembalian_id')
                ->references('id')
                ->on('peminjaman');
            $table
                ->foreign('buku_id')
                ->references('id')
                ->on('buku');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengembalian_detail');
    }
};

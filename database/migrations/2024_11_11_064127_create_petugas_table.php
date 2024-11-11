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
        Schema::create('petugas', function (Blueprint $table) {
            $table->integer('id')->primary()->autoIncrement();
            $table->string('username', length: 45);
            $table->string('password', length: 45);
            $table->string('nama', length: 100);
            $table->string('telp', length: 12);
            $table->tinyText('alamat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugas');
    }
};

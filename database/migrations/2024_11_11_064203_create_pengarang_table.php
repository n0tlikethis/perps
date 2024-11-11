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
        Schema::create('pengarang', function (Blueprint $table) {
            $table->integer('id')->primary()->autoIncrement();
            $table->string('nama', length: 100);
            $table->tinyText('alamat');
            $table->string('telp', length: 12);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengarang');
    }
};

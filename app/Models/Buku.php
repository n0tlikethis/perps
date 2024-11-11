<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'anggota';
    protected $fillable = ['nama', 'jenis_kelamin', 'alamat', 'telp'];
    public $timestamps = false;

    public function pengarang()
    {
        return $this->belongsTo(Pengarang::class, 'pengarang_id');
    }

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class, 'penerbit_id');
    }

    public function rak()
    {
        return $this->belongsTo(Rak::class, 'rak_kode_rak', 'kode_rak');
    }

    public function peminjamanDetail()
    {
        return $this->hasMany(PeminjamanDetail::class, 'buku_id');
    }

    public function pengembalianDetail()
    {
        return $this->hasMany(PengembalianDetail::class, 'buku_id');
    }
}

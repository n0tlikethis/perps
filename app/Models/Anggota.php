<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    protected $fillable = ['nama', 'jenis_kelamin', 'alamat', 'telp'];
    public $timestamps = false;
}

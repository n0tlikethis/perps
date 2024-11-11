<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas';
    protected $fillable = ['username', 'password', 'nama', 'telp', 'alamat'];
    public $timestamps = false;
}

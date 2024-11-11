<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    protected $table = 'rak';
    protected $primaryKey = 'kode_rak';
    protected $keyType = 'string';
    protected $fillable = ['kode_rak', 'lokasi'];
    public $incrementing = false;
    public $timestamps = false;
}

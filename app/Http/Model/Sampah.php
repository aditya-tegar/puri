<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sampah extends Model
{
    protected $table = 'sampah';
    protected $fillable = [
        'id',
        'nama_sampah',
        'harga_beli',
        'harga_jual'
    ];
}

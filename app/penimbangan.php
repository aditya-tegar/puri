<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penimbangan extends Model
{
    protected $table = 'penimbangan';
    protected $fillable = [
        'id',
        'id_sampah',
        'berat',
        'total_harga',
        'id_nasabah'
    ];
}

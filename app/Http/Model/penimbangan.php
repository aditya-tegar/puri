<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class penimbangan extends Model
{
    protected $table = 'penimbangan';
    protected $fillable = [
        'id',
        'id_sampah',
        'berat',
        'total_harga',
        'id_nasabah',
        'id_petugas',
        'kode_transaksi',
    ];
}

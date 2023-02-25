<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $table = 'detail_transaksi';
    protected $fillable = [
        'id_sampah',
        'berat_sampah',
        'harga_sampah',
        'total_harga',
        'id_transaksi'
    ];
}

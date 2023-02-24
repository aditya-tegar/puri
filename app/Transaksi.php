<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = [
        'penimbangan',
        'id_petugas',
        'tanggal',
        'id_nasabah',
        'kode_transaksi'
    ];
}

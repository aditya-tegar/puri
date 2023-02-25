<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Nasabah extends Model
{
    protected $table = 'nasabah';
    protected $fillable = [
        'id',
        'nomor_rekening',
        'nama_nasabah',
        'jenis_kelamin',
        'alamat',
        'nomor_wa',
        'email',
        'foto'
    ];
}

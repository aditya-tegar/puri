<?php

namespace App\Http\Controllers;

use App\Transaksi;
use App\User;
use App\Sampah;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        // jika kode penimbanganan '0' init jadi 1
        $KodeTerakhir=Transaksi::orderBy('kode_transaksi', 'desc')->first()->kode_transaksi??null;


        //define kode 'PNB' berdasarkan kode terakhir
        if (
            !$KodeTerakhir
        ){
            $KodeTerakhir=1;
        }else{
            $KodeTerakhir++;
        }
        $NomorPenimbangan='PNB-'.str_pad($KodeTerakhir, 3, '0', STR_PAD_LEFT);
        // dd($NomorPenimbangan);

        $Petugas=User::first();

        $SemuaNasabah=User::all();

        $ListSampah=Sampah::all();

        return view('transaksi.index', compact('NomorPenimbangan', 'Petugas', 'SemuaNasabah', 'ListSampah'));
        
    }
}

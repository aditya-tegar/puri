<?php

namespace App\Http\Controllers;

use App\penimbangan;
use App\Nasabah;
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
        $penimbanganModel = penimbangan::leftJoin('sampah','sampah.id','=','penimbangan.id_sampah')->get();
        $Petugas=User::first();
        $SemuaNasabah=Nasabah::all();

        $ListSampah=Sampah::all();

        return view('transaksi.index', compact('NomorPenimbangan', 'Petugas', 'SemuaNasabah', 'ListSampah','penimbanganModel'))->with('i', (request()->input('page',1)-1)*5);;
        
    }
    public function create()
    {
        $penimbanganModel = penimbangan::leftJoin('sampah','sampah.id','=','penimbangan.id_sampah')->get();
        // dd($penimbangan);
        return view('transaksi.index',compact('penimbanganModel'));
    }

    public function store($id, Request $request , penimbangan $penimbanganModel)
    {
     $request->validate([
        'id_sampah'=>'required',
        'berat'=>'required',
     ]);  

     penimbangan::create($request->all());
     return redirect()->route('transaksi.store')->with('Success','Sukses Menambah Data  ');
    }


    public function edit($id){

        $siswa = penimbangan::find($id);
        return view('transaksi.edit',compact('siswa'));

    }

    public function update($id, Request $request , penimbangan $penimbangan){

        $request->validate([
            'id_sampah'=>'required',
            'berat'=>'required',
            'total_harga'=>'required',
        ]); 
        $penimbangan = penimbangan::find($id);
        // Getting values from the blade template form
        $penimbangan->id_sampah =  $request->get('id_sampah');
        $penimbangan->berat = $request->get('berat');
        $penimbangan->total_harga = $request->get('total_harga');
        $penimbangan->id_nasabah = $request->get('id_nasabah');
        $penimbangan->save();
 
     return redirect()->route('transaksi.update')->with('success', 'Success updated.');

    }



    public function destroy($id){
        // $penimbangan =  penimbangan::find($id);
        // $penimbangan->delete();
        // return redirect()->route('/transaksi')->with('success', 'Success Delete.');
            $penimbangan = penimbangan::find($id);
        $penimbangan->delete();

        if ($penimbangan != null) {
            $penimbangan->delete();
            return redirect()->route('/transaksi')->with(['message'=> 'Successfully deleted!!']);
        }
        return redirect()->route('transaksi.index')->with(['message'=> 'Wrong ID!!']);

    }

}

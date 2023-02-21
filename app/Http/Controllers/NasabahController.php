<?php

namespace App\Http\Controllers;

use App\Nasabah;
use Illuminate\Http\Request;

class NasabahController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semuaNasabah = Nasabah::query()->latest('id')->paginate();
        return view('nasabah.index', compact('semuaNasabah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nasabah.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Nasabah::create([
        'nomor_rekening'=> $request->nomor_rekening,
        'nama_nasabah'=> $request->nama_nasabah ,
        'jenis_kelamin'=> $request->jenis_kelamin,
        'alamat'=> $request->alamat ,
        'nomor_wa'=> $request->nomor_wa ,
        'email'=> $request->email ,
        'foto'=> $request->foto->store('images', 'public') 
        ]);

        return redirect()->route('nasabah.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nasabah  $nasabah
     * @return \Illuminate\Http\Response
     */
    public function show(Nasabah $nasabah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nasabah  $nasabah
     * @return \Illuminate\Http\Response
     */
    public function edit(Nasabah $nasabah)
    {
        return view('nasabah.edit', compact('nasabah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nasabah  $nasabah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nasabah $nasabah)
    {
        $nasabah->update([
            'nomor_rekening'=> $request->nomor_rekening,
            'nama_nasabah'=> $request->nama_nasabah ,
            'jenis_kelamin'=> $request->jenis_kelamin,
            'alamat'=> $request->alamat ,
            'nomor_wa'=> $request->nomor_wa ,
            'email'=> $request->email ,
            'foto'=> $request->foto? $request->foto->store('images', 'public'):$nasabah->foto
            ]);
            
            return redirect()->route('nasabah.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nasabah  $nasabah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nasabah $nasabah)
    {
        $nasabah->delete();
        return redirect()->route('nasabah.index');
    }
}

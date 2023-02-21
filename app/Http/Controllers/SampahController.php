<?php

namespace App\Http\Controllers;

use App\Sampah;
use Illuminate\Http\Request;

class SampahController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semuaSampah = Sampah::query()->latest('id')->paginate();
        return view('sampah.index', compact('semuaSampah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sampah.tambah');
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
        Sampah::create([
        'nama_sampah'=> $request->nama_sampah,
        'harga_beli'=> $request->harga_beli ,
        'harga_jual'=> $request->harga_jual, 
        ]);

        return redirect()->route('sampah.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sampah  $sampah
     * @return \Illuminate\Http\Response
     */
    public function show(Sampah $sampah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sampah  $sampah
     * @return \Illuminate\Http\Response
     */
    public function edit(Sampah $sampah)
    {
        return view('sampah.edit', compact('sampah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sampah  $sampah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sampah $sampah)
    {
        $sampah->update([
            'nama_sampah'=> $request->nama_sampah,
            'harga_beli'=> $request->harga_beli ,
            'harga_jual'=> $request->harga_jual,
            ]);
            
            return redirect()->route('sampah.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sampah  $sampah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sampah $sampah)
    {
        $sampah->delete();
        return redirect()->route('sampah.index');
    } 
}

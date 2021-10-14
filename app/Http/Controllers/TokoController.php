<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('toko.index', [
            'toko' => Toko::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Toko::create([
            'nama_toko' => $request->nama_toko,
            'nama_pemilik' => $request->nama_pemilik,
            'alamat' => $request->alamat,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'foto_1' => $request->foto_1,
            'foto_2' => $request->foto_2,
            'foto_3' => $request->foto_3,
            'metode_penjualan' => $request->metode_penjualan,
            'harga' => "Rp " . $request->harga,
            'hari_kerja' => $request->hari_kerja_mulai .  " - " . $request->hari_kerja_sampai,
            'jam_buka' => $request->jam_buka_mulai . " - " . $request->jam_buka_sampai,
        ]);

        return redirect('toko');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('toko.update', [
            'toko' => Toko::find($id)
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Toko::find($id)->update([
            'nama_toko' => $request->nama_toko,
            'nama_pemilik' => $request->nama_pemilik,
            'alamat' => $request->alamat,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'foto_1' => $request->foto_1,
            'foto_2' => $request->foto_2,
            'foto_3' => $request->foto_3,
            'metode_penjualan' => $request->metode_penjualan,
            'harga' => $request->harga,
            'hari_kerja' => $request->hari_kerja,
            'jam_buka' => $request->jam_buka,
        ]);

        return redirect('toko');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Toko::find($id)->delete();
        
        return redirect('toko');
    }
}

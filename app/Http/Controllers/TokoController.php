<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_toko' => 'required|max:255',
            'nama_pemilik' => 'required|max:255',
            'alamat' => 'required',
            'provinsi' => 'required|max:255',
            'kota' => 'required|max:255',
            'kecamatan' => 'required|max:255',
            'kelurahan' => 'required|max:255',
            'foto_1' => 'required|max:255',
            'foto_2' => 'required|max:255',
            'foto_3' => 'required|max:255',
            'deskripsi' => 'required',
            'metode_penjualan' => 'required',
            'harga' => 'required|max:255',
            'hari_kerja_mulai' => 'required',
            'hari_kerja_sampai' => 'required',
            'jam_buka_mulai' => 'required',
            'jam_buka_sampai' => 'required'
        ]);

        // $foto1 = $request->file('foto_1')->store('/public/img');
        Toko::create($validatedData);
        // Toko::create([
        //     'nama_toko' => $request->nama_toko,
        //     'nama_pemilik' => $request->nama_pemilik,
        //     'alamat' => $request->alamat,
        //     'provinsi' => $request->provinsi,
        //     'kota' => $request->kota,
        //     'kecamatan' => $request->kecamatan,
        //     'kelurahan' => $request->kelurahan,
        //     'foto_1' => $request->foto_1,
        //     'foto_2' => $request->foto_2,
        //     'foto_3' => $request->foto_3,
        //     'metode_penjualan' => $request->metode_penjualan,
        //     'harga' => "Rp " . $request->harga,
        //     'hari_kerja' => $request->hari_kerja_mulai .  " - " . $request->hari_kerja_sampai,
        //     'jam_buka' => $request->jam_buka_mulai . " - " . $request->jam_buka_sampai,
        // ]);

        return redirect('toko');
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
        
        $validatedData = $request->validate([
            'nama_toko' => 'required|max:255',
            'nama_pemilik' => 'required|max:255',
            'alamat' => 'required',
            'provinsi' => 'required|max:255',
            'kota' => 'required|max:255',
            'kecamatan' => 'required|max:255',
            'kelurahan' => 'required|max:255',
            'foto_1' => 'required|max:255',
            'foto_2' => 'required|max:255',
            'foto_3' => 'required|max:255',
            'deskripsi' => 'required',
            'metode_penjualan' => 'required',
            'harga' => 'required|max:255',
            'hari_kerja_mulai' => 'required',
            'hari_kerja_sampai' => 'required',
            'jam_buka_mulai' => 'required',
            'jam_buka_sampai' => 'required'
        ]);

        Toko::find($id)->update($validatedData);

        // Toko::find($id)->update([
        //     'nama_toko' => $request->nama_toko,
        //     'nama_pemilik' => $request->nama_pemilik,
        //     'alamat' => $request->alamat,
        //     'provinsi' => $request->provinsi,
        //     'kota' => $request->kota,
        //     'kecamatan' => $request->kecamatan,
        //     'kelurahan' => $request->kelurahan,
        //     'foto_1' => $request->foto_1,
        //     'foto_2' => $request->foto_2,
        //     'foto_3' => $request->foto_3,
        //     'metode_penjualan' => $request->metode_penjualan,
        //     'harga' => $request->harga,
        //     'hari_kerja' => $request->hari_kerja,
        //     'jam_buka' => $request->jam_buka,
        // ]);

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

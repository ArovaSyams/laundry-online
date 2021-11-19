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
            'toko' => Toko::all(),
            'title' => 'Data Toko'
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
        $request->validate([
            'nama_toko' => 'required|max:255',
            'user_id' => 'required|max:255',
            'alamat' => 'required',
            'provinsi' => 'required|max:255',
            'kota' => 'required|max:255',
            'kecamatan' => 'required|max:255',
            'kelurahan' => 'required|max:255',
            // 'foto_1' => 'required|max:255',
            // 'foto_2' => 'required|max:255',
            // 'foto_3' => 'required|max:255',
            'deskripsi' => 'required',
            'metode_penjualan' => 'required',
            'harga' => 'required|max:255',
            'hari_kerja_mulai' => 'required',
            'hari_kerja_sampai' => 'required',
            'jam_buka_mulai' => 'required',
            'jam_buka_sampai' => 'required'
        ]);

        $foto1 = $request->file('foto_1');
        $foto2 = $request->file('foto_2');
        $foto3 = $request->file('foto_3');
        $namaFoto1 = '';
        $namaFoto2 = '';
        $namaFoto3 = '';

        if ($foto1) {
            $namaFoto1 = $foto1->hashName();
            $foto1->move('img', $namaFoto1);
        }
        if ($foto2) {
            $namaFoto2 = $foto2->hashName();
            $foto2->move('img', $namaFoto2);
        }
        if ($foto3) {
            $namaFoto3 = $foto3->hashName();
            $foto3->move('img', $namaFoto3);
        }
        
        Toko::create([
            'nama_toko' => $request->nama_toko,
            'user_id' => $request->user_id,
            'alamat' => $request->alamat,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'foto_1' => $namaFoto1,
            'foto_2' => $namaFoto2,
            'foto_3' => $namaFoto3,
            'deskripsi' => $request->deskripsi,
            'metode_penjualan' => $request->metode_penjualan,
            'harga' => "Rp " . $request->harga,
            'hari_kerja_mulai' => $request->hari_kerja_mulai,
            'hari_kerja_sampai' => $request->hari_kerja_sampai,
            'jam_buka_mulai' => $request->jam_buka_mulai,
            'jam_buka_sampai' => $request->jam_buka_sampai
        ]);

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
            'toko' => Toko::find($id),
            'title' => 'Data Toko'
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
        
        $request->validate([
            'nama_toko' => 'required|max:255',
            'user_id' => 'required|max:255',
            'alamat' => 'required',
            'provinsi' => 'required|max:255',
            'kota' => 'required|max:255',
            'kecamatan' => 'required|max:255',
            'kelurahan' => 'required|max:255',
            // 'foto_1' => 'required|max:255',
            // 'foto_2' => 'required|max:255',
            // 'foto_3' => 'required|max:255',
            'deskripsi' => 'required',
            'metode_penjualan' => 'required',
            'harga' => 'required|max:255',
            'hari_kerja_mulai' => 'required',
            'hari_kerja_sampai' => 'required',
            'jam_buka_mulai' => 'required',
            'jam_buka_sampai' => 'required'
        ]);

        $foto1 = $request->file('foto_1');
        $foto2 = $request->file('foto_2');
        $foto3 = $request->file('foto_3');

        $namaFoto1 = $request->foto_lama1;
        $namaFoto2 = $request->foto_lama2;
        $namaFoto3 = $request->foto_lama3;
        // jika ada foto
        if ($foto1) {
            $namaFoto1 = $foto1->hashName();
            $foto1->move('img', $namaFoto1);

            if ($request->foto_lama1) {
                unlink('img/' . $request->foto_lama1);
            }
        }
        if ($foto2) {
            $namaFoto2 = $foto2->hashName();
            $foto2->move('img', $namaFoto2);

            if ($request->foto_lama2) {
                unlink('img/' . $request->foto_lama2);
            }
        }
        if ($foto3) {
            $namaFoto3 = $foto3->hashName();
            $foto3->move('img', $namaFoto3);

            if ($request->foto_lama3) {
                unlink('img/' . $request->foto_lama3);
            }
        }

        Toko::find($id)->update([
            'nama_toko' => $request->nama_toko,
            'user_id' => $request->user_id,
            'alamat' => $request->alamat,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'foto_1' => $namaFoto1,
            'foto_2' => $namaFoto2,
            'foto_3' => $namaFoto3,
            'deskripsi' => $request->deskripsi,
            'metode_penjualan' => $request->metode_penjualan,
            'harga' => "Rp " . $request->harga,
            'hari_kerja_mulai' => $request->hari_kerja_mulai,
            'hari_kerja_sampai' => $request->hari_kerja_sampai,
            'jam_buka_mulai' => $request->jam_buka_mulai,
            'jam_buka_sampai' => $request->jam_buka_sampai
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
        $data = Toko::find($id);
        if ($data['foto_1']) {
            unlink('img/' . $data['foto_1']);
        }
        if ($data['foto_2']) {
            unlink('img/' . $data['foto_2']);
        }
        if ($data['foto_3']) {
            unlink('img/' . $data['foto_3']);
        }
        $data->delete();
        
        return redirect('toko');
    }
}

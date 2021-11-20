<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index', [
            'user' => User::latest()->paginate(3),
            'title' => 'Data User'
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
            'nama' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255',
            'tanggal_lahir' => 'required|max:255',
            'alamat' => 'required',
            'provinsi' => 'required|max:255',
            'kota' => 'required|max:255',
            'kecamatan' => 'required|max:255',
            'kelurahan' => 'required|max:255',
        ]);

        $namaFoto = 'default.jpg';
        if ($request->file('foto')) {

            $foto = $request->file('foto');
            $namaFoto = $foto->hashName();
            $foto->move('img', $namaFoto);
        } 


        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'point' => $request->point,
            'foto' => $namaFoto
        ]);

        return redirect('user');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('user.update', [
            'user' => User::find($id),
            'title' => 'Data User'
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
            'nama' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255',
            'tanggal_lahir' => 'required|max:255',
            'alamat' => 'required',
            'provinsi' => 'required|max:255',
            'kota' => 'required|max:255',
            'kecamatan' => 'required|max:255',
            'kelurahan' => 'required|max:255',
            'point' => 'required',
        ]);

        $foto = $request->file('foto');
        // cek foto lama
        if (!$foto) {
            $namaFoto = $request->foto_lama;
        } else {

            $namaFoto = $foto->hashName();
            $foto->move('img', $namaFoto);

            if ($request->foto_lama !== 'default.jpg') {
                unlink('img/' . $request->foto_lama);
            }
        } 

        User::find($id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'point' => $request->point,
            'foto' => $namaFoto
        ]);

        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::find($id);
        if ($data['foto'] !== 'default.jpg') {
            unlink('img/' . $data['foto']);
        }
        $data->delete();

        return redirect('user');
    }
}

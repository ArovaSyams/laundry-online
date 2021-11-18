<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('komentar.index', [
            'komentar' => Komentar::all(),
            'title' => 'Data Komentar'
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
            'user_id' => 'required|max:255',
            'toko_id' => 'required|max:255',
            'rating' => 'required|max:255',
            'komentar' => 'required',
            
        ]);

        Komentar::create($validatedData);
        return redirect('komentar');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('komentar.update', [
            'komentar' => Komentar::find($id),
            'title' => 'Data Komentar'
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
            'user_id' => 'required|max:255',
            'toko_id' => 'required|max:255',
            'rating' => 'required|max:255',
            'komentar' => 'required',
            
        ]);

        Komentar::find($id)->update($validatedData);

        return redirect('komentar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Komentar::find($id)->delete();
        
        return redirect('komentar');
    }
}

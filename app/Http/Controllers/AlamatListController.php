<?php

namespace App\Http\Controllers;

use App\Models\AlamatList;
use Illuminate\Http\Request;

class AlamatListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AlamatList::create([
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AlamatList  $alamatList
     * @return \Illuminate\Http\Response
     */
    public function show(AlamatList $alamatList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AlamatList  $alamatList
     * @return \Illuminate\Http\Response
     */
    public function edit(AlamatList $alamatList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AlamatList  $alamatList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        AlamatList::find($id)->update([
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AlamatList  $alamatList
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AlamatList::find($id)->delete();
        
        return redirect()->back();
    }
}

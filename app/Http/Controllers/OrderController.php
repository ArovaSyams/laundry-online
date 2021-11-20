<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('order.index', [
            'order' => Order::latest()->paginate(3),
            'title' => 'Data Order'
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
            'alamat' => 'required',
            'provinsi' => 'required|max:255',
            'kota' => 'required|max:255',
            'kecamatan' => 'required|max:255',
            'kelurahan' => 'required|max:255',
            'jumlah_qty' => 'required|max:255',
            'total' => 'required',
            'waktu_pengambilan' => 'required|max:255',
            'tanggal_pemesanan' => 'required',
            'tanggal_jadi' => 'required',
        ]);

        Order::create($validatedData);
        return redirect('order');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('order.update', [
            'order' => Order::find($id),
            'title' => 'Data Order'
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
            'alamat' => 'required',
            'provinsi' => 'required|max:255',
            'kota' => 'required|max:255',
            'kecamatan' => 'required|max:255',
            'kelurahan' => 'required|max:255',
            'jumlah_qty' => 'required|max:255',
            'total' => 'required',
            'waktu_pengambilan' => 'required|max:255',
            'tanggal_pemesanan' => 'required',
            'tanggal_jadi' => 'required',
        ]);
        
        Order::find($id)->update($validatedData);

        return redirect('order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::find($id)->delete();
        
        return redirect('order');
    }
}

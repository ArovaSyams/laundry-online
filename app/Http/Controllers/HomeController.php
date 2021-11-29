<?php

namespace App\Http\Controllers;

use App\Models\Langganan;
use App\Models\Order;
use App\Models\Status;
use App\Models\Toko;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'title' => 'Beranda',
            'toko' => Toko::all()
        ]);
    }

    public function userHome()
    {
        // $s=0;
        // if(Order::select('tanggal_jadi') === null) {
        //     $s=1;
        // }
        // dd();
        return view('userhome', [
            'title' => 'Profil',
            'langganan' =>Langganan::all(),
            'order' => Order::all(),
            // 'orderLalu' => Order::where('tanggal_jadi', !null)->get()
        ]);
    }
    
    public function adminHome()
    {
        return view('adminhome', [
            'title' => 'Dashboard',
            'user' => User::limit(2)->latest()->get(),
            'toko' => Toko::limit(2)->latest()->get(),
            'order' => Order::limit(2)->latest()->get(),
            'status' => Status::limit(2)->latest()->get(),
            'userc' =>User::count(),
            'tokoc' =>Toko::count(),
            'orderc' =>Order::count(),
            'statusc' =>Status::count(),
        ]);
    }
}

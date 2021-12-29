<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
use App\Models\Komentar;
use App\Models\Langganan;
use App\Models\Order;
use App\Models\Status;
use App\Models\Toko;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
            'title' => 'Lapaklaundry | Beranda',
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
            'title' => Auth::user()->nama . ' | Lapaklaundry',
            'langganan' =>Langganan::where('user_id', Auth::user()->id)->get(),
            'order' => Order::all(),
            'alamat' => Alamat::all()
            // 'orderLalu' => Order::where('tanggal_jadi', !null)->get()
        ]);
    }
    
    public function adminHome()
    {
        return view('adminhome', [
            'title' => 'Dashboard | Lapaklaundry',
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

    // user toko
    public function tokoUser() 
    {
        return view('tokouser', [
            'title' => 'Toko | Lapaklaundry',
            'toko' => Toko::all()
        ]);
    }

    // profil owner toko
    public function profilTokoOwner($id) 
    {
        return view('pages.profiltoko-owner', [
            'title' => 'Toko ' . Toko::where('id', $id)->first()->nama_toko . ' | Lapaklaundry',
            'toko' => Toko::find($id)
        ]);
    }

    // profil toko

    public function profilToko($id) 
    {

        if(Auth::user()) {
            $follow = Langganan::where('user_id', Auth::user()->id)->where('toko_id', $id)->first();
        }else {
            $follow = NULL;
        }
        return view('pages.profiltoko', [
            'title' => Toko::find($id)->nama_toko . ' | Lapaklaundry',
            'toko' => Toko::find($id),
            'follow' => $follow,
            'komentar' => Komentar::where('toko_id', $id)->get(),
        ]);
    }
}

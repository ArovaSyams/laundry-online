@extends('layouts.apphome')

@section('content')

    <div class="container">
        {{-- Hero Section --}}
        <div class="card position-relative" style="border-radius: 10px; margin-top:100px">
            <div class="position-relative" style="border-radius: 10px;">
                <img class="card-img-top" src="/dist/img/about-head.jpg" alt="" style="border-radius: 10px">
            </div>
            <h2 class="position-absolute  text-light" style="top: 100px; left: 50px;">Cari Toko Laundry Disekitar Anda</h2>
            <p class="position-absolute text-light " style="top: 140px; left: 50px;">Cari toko laundry di sekitar wilayah
                anda</p>
            <div class="position-absolute" style="top: 120px; left: 50px; right:50px;">
                <div class="input-group mb-3 position-absolute " style="top: 55px; left: 0px; right:0px;">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg" placeholder="Cari Toko / Kota anda" >
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </div>
                
                
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>K</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        
        <div class="mt-3">
            <div class="row">
                <div class="col col-md-12">
                    <div class="row">
                        @foreach ($toko as $t)
                            <div class="col col-md-3">
                                <div class="card">
                                    <a href="/profiltoko/{{ $t->id }}"><img src="/dist/img/photo1.png" class="card-img-top" alt="..."></a>

                                    <div class="card-body">
                                        <a href="/profiltoko/{{ $t->id }}" ><h5 class=" fw-normal fs-4">{{ $t->nama_toko }}</h5></a>
                                        @for ($i = 0; $i < $t->rating; $i++)
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        @endfor

                                        <p class="card-text fs-5">Rp {{ $t->harga }} / {{ $t->metode_penjualan }}</p>
                                        <p class="card-text">{{ $t->kelurahan }}, {{ $t->kecamatan }},
                                            {{ $t->kota }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

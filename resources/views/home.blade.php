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
            <div class="input-group mb-3 position-absolute " style="top: 180px; left: 50px; right:50px;">
                <input type="text" class="form-control form-control-lg col col-md-8"
                    placeholder="Masukkan nama toko / kota anda">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                        class="fas fa-search"></i></button>
            </div>
        </div>

        <div class="d-flex flex-wrap mt-5">
            <div class="row">
                <div class="col col-md-2">
                    <div class="card">
                        <div class="card-body">
                            <h3>Filter</h3>

                        </div>
                    </div>
                </div>
                <div class="col col-md-10">
                    <div class="row">
                        @foreach ($toko as $t)
                            <div class="col col-md-3">
                                <div class="card">
                                    <img src="/dist/img/photo1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class=" fw-normal fs-4">{{ $t->nama_toko }}</h5>
                                        @for ($i = 0; $i < $t->rating; $i++)
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        @endfor

                                        <p class="card-text fs-5">{{ $t->harga }}</p>
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

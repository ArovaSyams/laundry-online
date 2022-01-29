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
                <form action="/" method="GET" class="d-inline">
                    <div class="input-group mb-3 position-absolute " style="top: 55px; left: 0px; right:0px;">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg" placeholder="Cari Toko / Kota anda"
                                name="search-top" id="search" value="{{ request('search-top') }}">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i
                                    class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </form>


            </div>
        </div>


        @if ($toko->count())

            <div class="mt-5">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card sticky-top" style="top: 80px">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h3 class="mb-3">Filter</h3>
                                
                                <form action="/" method="get">
                                <input type="hidden" name="search-top" value="{{ request('search-top') }}">
                                <div class="mb-3">
                                    <select class="form-select" name="filter-kecamatan">
                                        @if (request('filter-kecamatan'))
                                        <option value="request('filter-kecamatan')" selected>{{ request('filter-kecamatan') }}</option>
                                        @elseif (!request('filter-kecamatan'))
                                        <option value="" selected>Kecamatan</option>
                                        @endif
                                        @foreach ($kecamatan as $k)
                                            <option value="{{ $k->kecamatan }}">{{ $k->kecamatan }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="mb-3">
                                    <select class="form-select" aria-label="Default select example" name="filter-rating">
                                        @if (request('filter-rating') === 'tinggi')
                                        <option value="{{ request('filter-rating') }}" selected>&uparrow; Rating Tertinggi</option>
                                        @elseif (request('filter-rating') === 'rendah')
                                        <option value="{{ request('filter-rating') }}" selected>&downarrow; Rating Terendah</option>
                                        @elseif (!request('filter-rating'))
                                        <option value="" selected>Rating</option>
                                        @endif
                                        <option value="tinggi">&uparrow; Rating Tertinggi</option>
                                        <option value="rendah">&downarrow; Rating Terendah</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <select class="form-select" aria-label="Default select example" name="filter-harga">
                                        @if (request('filter-harga') === 'tinggi')
                                        <option value="{{ request('filter-harga') }}" selected>&uparrow; Harga Tertinggi</option>
                                        @elseif (request('filter-harga') === 'rendah')
                                        <option value="{{ request('filter-harga') }}" selected>&downarrow; Harga Terendah</option>
                                        @elseif (!request('filter-harga'))
                                        <option value="" selected>Harga</option>
                                        @endif
                                        <option value="tinggi">&uparrow; Harga Tertinggi</option>
                                        <option value="rendah">&downarrow; Harga Terendah</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success col-md-12"><i class="fa fa-search"
                                        aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-9">
                        <div class="row">
                            @foreach ($toko as $t)
                                <div class="col col-md-4">
                                    <div class="card">
                                        <a href="/profiltoko/{{ $t->id }}"><img src="/dist/img/photo1.png"
                                                class="card-img-top" alt="..."></a>

                                        <div class="card-body">
                                            <a href="/profiltoko/{{ $t->id }}">
                                                <h5 class=" fw-normal fs-4">{{ $t->nama_toko }}</h5>
                                            </a>
                                            @for ($i = 0; $i < $t->rating; $i++)
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            @endfor

                                            <p class="card-text fs-5">Rp {{ $t->harga }} / {{ $t->metode_penjualan }}
                                            </p>
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
        @else
            <h1 class="text-center mt-3">Laundry tidak ditemukan :(</h1>
        @endif

    </div>

@endsection

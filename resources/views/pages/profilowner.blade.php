@extends('layouts.apphome')

@section('content')
<div class="container">

    <div style="margin-top: 100px">
        <div class="card p-3 flex flex-row">
            <div>
                <img src="/dist/img/photo1.png" width="100px" height="100px" style="object-fit: cover" class="rounded-circle" alt="">
            </div>
            <div class="card-body d-flex bd-highlight mt-1">
                <div class="mr-auto bd-highlight">
                    <h2 class="lh-1">{{ $user->nama }}</h2>
                    <p class="card-text text-muted">Aktif 20 menit yang lalu | Batam</p>
                </div>
                <div class="mr-auto bd-highlight">
                    <h6>Rating Kualitas Toko</h6>
                    <p class="fs-3">5 <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></p>
                </div>
                <div class="bd-highlight">
                    <a href="/profilowner/{{ $user->id }}" class="btn btn-success">Chat Owner</a>
                    
                    {{-- @if ($follow)
                    <form action="/langganan/{{ $toko->id }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger ml-2">Unfollow</button>
                    </form>
                    @else
                        @if (Auth::user())
                        <form action="/langganan" method="POST" class="d-inline">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="toko_id" value="{{ $toko->id }}">
                            <button class="btn btn-success ml-2">follow</button>                        
                        </form>
                        @else
                        <a href="/login" class="btn btn-success ml-2">follow</a>                        
                        @endif
                    @endif --}}
                    
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="row">
            <div class="col">

                <div class="d-flex justify-content-start mt-4">
                    <p id="berandaNav" class="nav-owner nav-owner-active rounded-pill fw-bolder fs-5">Beranda</p>
                    <p id="tokoNav" class="nav-owner rounded-pill fw-bolder fs-5">Toko</p>
                    <p id="ulasanNav" class="nav-owner rounded-pill fw-bolder fs-5">Ulasan</p>
                    <hr class="border-1 mt-0 ">
                </div>

                <div id="beranda" class="mt-5">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="/dist/img/photo1.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="/dist/img/photo2.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="/dist/img/photo2.png" class="d-block w-100" alt="...">
                          </div>
                          
                        </div>
                       <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </button>
                      </div>

                      {{-- toko --}}
                      <div class="mt-4">
                          <h3>Toko</h3>
                          <hr class="border-0">
                          
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

                <div id="toko" class="d-none mt-5">
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

                <div id="ulasan" class="d-none mt-5">
                    <h3>Ulasan ({{ $komentar->count() }})</h3>

                    
                    @foreach ($komentar as $k)                                    
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2 border-end">
                                    <img src="/dist/img/photo1.png" alt="" width="100%">    
                                    <h5 class="mt-3">{{ $k->toko->nama_toko }}</h5>
                                </div>

                                <div class="col-md-10">
                                    <div class="row mb-3">
                                        <div class="col col-md-1">
                                            <img src="/dist/img/photo1.png" width="50px" height="50px" style="object-fit: cover" class="rounded-circle ml-2" alt="">
                                        </div>
                                        <div class="col col-md-11">
                                            <p>{{ $k->user->nama }}<br>
                                            <span class="text-muted">Dibuat 1 bulan yang lalu</span>
                                            </p>
                                            <p>
                                                @for ($i = 0; $i < $k->rating; $i++)
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                @endfor
                                                <br>
                                                {{ $k->komentar }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

                </div>


            </div>
        </div>
    </section>

</div>
@endsection
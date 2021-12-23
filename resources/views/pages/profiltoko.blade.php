@extends('layouts.apphome')

@section('content')
<div class="container">

    <div class="row" style="margin-top: 100px">
        {{-- Foto --}}
        <div class="col col-md-5" style="color: black;">
            <img src="/dist/img/photo1.png" class="rounded" width="100%" alt="">
            <div class="row mt-3">
                <div class="col col-sm-4">
                    <img src="/dist/img/photo1.png" class="rounded" style="object-fit: cover" width="100%" alt="">
                </div>
                <div class="col col-sm-4">
                    <img src="/dist/img/photo2.png" class="rounded" style="object-fit: cover" width="100%" alt="">
                </div>
                <div class="col col-sm-4">
                    <img src="/dist/img/photo2.png" class="rounded" style="object-fit: cover" width="100%" alt="">
                </div>
            </div>
        </div>

        {{-- Deskripsi --}}
        <div class="col col-md-7">
            <h1 class="mb-1">{{ $toko->nama_toko }}</h1>
            <div class="d-flex flex-row ">
                <p class="mr-1"><i class="fa fa-star" style="color:rgb(231, 241, 81)" aria-hidden="true"></i> ({{ $toko->rating }})</p>
                <p>&centerdot;</p>
                <p class="ml-1">Komentar ({{ $komentar->count() }})</p>
            </div>
            <h2 class="fw-bolder">{{ $toko->harga }}</h2>
            
            <a href="" class="btn btn-success mt-3 mb-4">Pesan Jasa</a>

            <h4>Detail</h4>
            {{-- <hr class="border"> --}}
            <dl class="row mt-1">
                <dt class="col-sm-3 fw-normal">Metode Penjulan</dt>
                <dd class="col-sm-9">{{ $toko->metode_penjualan }}</dd>

                <dt class="col-sm-3 fw-normal">Hari Kerja</dt>
                <dd class="col-sm-9">{{ $toko->hari_kerja_mulai }} - {{ $toko->hari_kerja_sampai }}</dd>

                <dt class="col-sm-3 fw-normal">Jam Kerja</dt>
                <dd class="col-sm-9">{{ $toko->jam_buka_mulai }} - {{ $toko->jam_buka_sampai }}</dd>

                <dt class="col-sm-3 fw-normal">Nomor Telepon</dt>
                <dd class="col-sm-9">{{ $toko->no_telp }}</dd>

                <dt class="col-sm-3 fw-normal">Deskripsi</dt>
                <dd class="col-sm-9">{{ $toko->deskripsi }}</dd>

                <dt class="col-sm-3 fw-normal">Alamat</dt>
                <dd class="col-sm-9">
                    <p>{{ $toko->alamat }}</p>
                    <p style="line-height: 1px">{{ $toko->kelurahan }}, {{ $toko->kelurahan }}, {{ $toko->kota }}, {{ $toko->provinsi }}</p>
                </dd>


            </dl>

        </div>
    </div>

    {{-- profil user --}}
    <div>
        <div class="card p-3 flex flex-row">
            <div>
                <img src="/dist/img/photo1.png" width="100px" height="100px" style="object-fit: cover" class="rounded-circle" alt="">
            </div>
            <div class="card-body d-flex bd-highlight mt-1">
                <div class="mr-auto bd-highlight">
                    <h4 class="card-title">{{ $toko->user->nama }}</h4>
                    <p class="card-text text-muted">Aktif 20 menit yang lalu</p>
                </div>
                <div class="bd-highlight">
                    <a href="" class="btn btn-primary">Kunjungi User</a>
                    <a href="" class="btn btn-success ml-2">Follow</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Ulasan --}}
    <div>
        <div>
            <h3>Ulasan ({{ $komentar->count() }})</h3>
            <p class="text-muted">{{ $toko->nama_toko }}</p>
        </div>

        <div>
            @foreach ($komentar as $k)
            <div class="row mb-4">
                <div class="col col-md-1">
                    <img src="/dist/img/photo1.png" width="50px" height="50px" style="object-fit: cover" class="rounded-circle" alt="">
                </div>
                <div class="col col-md-11">
                    <p>{{ $k->user->nama }} <br>
                    <span class="text-muted">Dibuat 10 bulan yang lalu</span>
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
            <hr class="border">
            @endforeach
        </div>
    </div>

</div>
@endsection
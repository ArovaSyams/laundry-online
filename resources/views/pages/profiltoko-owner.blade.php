
@extends('layouts.apphome')

@section('content')
<div class="container">
    <form method="POST" action="/toko/{{ $toko->id }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <a href="/toko-user" style="margin-top: 80px"  class=" btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        @if (session()->has('pesan'))
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            {{ session()->get('pesan') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <div class="row" style="margin-top: 20px">
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

            <div class="mb-3">
                <label for="foto_1" class="form-label">Foto 1</label>
                <input class="form-control @error('foto_1') is-invalid @enderror"
                    type="file" id="foto_1" name="foto_1">
                @error('foto_1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="foto_2" class="form-label">Foto 2</label>
                <input class="form-control @error('foto_2') is-invalid @enderror"
                    type="file" id="foto_2" name="foto_2">
                @error('foto_2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="foto_3" class="form-label">Foto 3</label>
                <input class="form-control @error('foto_3') is-invalid @enderror"
                    type="file" id="foto_3" name="foto_3">
                @error('foto_3')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        
        {{-- Deskripsi --}}
        <div class="col col-md-7">
            <div class="mb-3">
                <input type="text"
                    class="form-control @error('nama_toko') is-invalid @enderror"
                    id="nama_toko" name="nama_toko" placeholder="Sriwijaya Laundry"
                    value="{{ $toko->nama_toko }}">
                @error('nama_toko')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- <h1 class="mb-1">{{ $toko->nama_toko }}</h1> --}}

            <div class="form-row">
                <p class="mt-1">Rp</p>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text"
                            class="form-control @error('harga') is-invalid @enderror"
                            id="harga" name="harga" placeholder="10.000"
                            value="{{ $toko->harga }}">
                        @error('harga')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <p class="mt-1">/ {{ $toko->metode_penjualan }}</p>
                
            </div>
            {{-- <h2 class="fw-bolder">Rp {{ $toko->harga }} / {{ $toko->metode_penjualan }}</h2> --}}
            
            <p href="" class="btn btn-secondary  mt-3 mb-4">Pesan Jasa</p>

            <h4>Detail</h4>
            {{-- <hr class="border"> --}}
            <dl class="row mt-1">
                <dt class="col-sm-3 fw-normal">Metode Penjulan</dt>
                <dd class="col-sm-9">
                    <select
                        class="form-select  @error('metode_penjualan') is-invalid @enderror"
                        id="metode_penjualan" name="metode_penjualan">
                        <option selected value="{{ $toko->metode_penjualan }}">{{ $toko->metode_penjualan}}an</option>
                        <option value="Kilo">Kiloan</option>
                        <option value="Biji">Bijian</option>
                    </select>
                    @error('metode_penjualan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </dd>

                <dt class="col-sm-3 fw-normal">Hari Kerja</dt>
                <dd class="col-sm-9">
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <select
                                    class="form-select @error('hari_kerja_mulai') is-invalid @enderror"
                                    id="hari_kerja_mulai" name="hari_kerja_mulai">
                                    <option selected value="{{ $toko->hari_kerja_mulai }}">{{ $toko->hari_kerja_mulai }}</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jum'at">Jum'at</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                                @error('hari_kerja_mulai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <p class="mt-1">-</p>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select
                                    class="form-select @error('hari_kerja_sampai') is-invalid @enderror"
                                    id="hari_kerja_sampai" name="hari_kerja_sampai">
                                    <option selected value="{{ $toko->hari_kerja_sampai }}">{{ $toko->hari_kerja_sampai }}</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jum'at">Jum'at</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                                @error('hari_kerja_sampai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    {{-- {{ $toko->hari_kerja_mulai }} - {{ $toko->hari_kerja_sampai }} --}}
                </dd>

                <dt class="col-sm-3 fw-normal">Jam Kerja</dt>
                <dd class="col-sm-9">
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="time"
                                    class="form-control @error('jam_buka_mulai') is-invalid @enderror"
                                    id="jam_buka_mulai" name="jam_buka_mulai" placeholder="07:00 WIB"
                                    value="{{ $toko->jam_buka_mulai }}">
                                @error('jam_buka_mulai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <p class="mt-1">-</p>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="time"
                                    class="form-control @error('jam_buka_sampai') is-invalid @enderror"
                                    id="jam_buka_sampai" name="jam_buka_sampai" placeholder="18:00 WIB"
                                    value="{{ $toko->jam_buka_sampai }}">
                                @error('jam_buka_sampai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- {{ $toko->jam_buka_mulai }} - {{ $toko->jam_buka_sampai }} --}}
                </dd>

                <dt class="col-sm-3 fw-normal">Nomor Telepon</dt>
                <dd class="col-sm-9">
                    <input type="text"
                        class="form-control @error('no_telp') is-invalid @enderror"
                        id="no_telp" name="no_telp" placeholder="masukkan no_telp"
                        value="{{ $toko->no_telp }}">
                    @error('no_telp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror    
                </dd>

                <dt class="col-sm-3 fw-normal">Alamat</dt>
                <dd class="col-sm-9">
                    <p>
                        <input type="text"
                            class="form-control @error('alamat') is-invalid @enderror"
                            id="alamat" name="alamat" placeholder="masukkan alamat"
                            value="{{ $toko->alamat }}">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror    
                    </p>
                    {{-- <p style="line-height: 1px">{{ $toko->kelurahan }}, {{ $toko->kelurahan }}, {{ $toko->kota }}, {{ $toko->provinsi }}</p> --}}
                </dd>
                
                <dt class="col-sm-3 fw-normal">Provinsi</dt>
                <dd class="col-sm-9">
                    <input type="text"
                        class="form-control @error('provinsi') is-invalid @enderror"
                        id="provinsi" name="provinsi" placeholder="masukkan provinsi"
                        value="{{ $toko->provinsi }}">
                    @error('provinsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror    
                </dd>
                <dt class="col-sm-3 fw-normal">Kota</dt>
                <dd class="col-sm-9">
                    <input type="text"
                        class="form-control @error('kota') is-invalid @enderror" id="kota"
                        name="kota" placeholder="masukkan kota"
                        value="{{ $toko->kota }}">
                    @error('kota')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </dd>
                <dt class="col-sm-3 fw-normal">Kecamatan</dt>
                <dd class="col-sm-9">
                    <input type="text"
                        class="form-control @error('kecamatan') is-invalid @enderror"
                        id="kecamatan" name="kecamatan" placeholder="masukkan kecamatan"
                        value="{{ $toko->kecamatan }}">
                    @error('kecamatan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </dd>
                <dt class="col-sm-3 fw-normal">Kelurahan</dt>
                <dd class="col-sm-9">
                    <input type="text"
                        class="form-control @error('kelurahan') is-invalid @enderror"
                        id="kelurahan" name="kelurahan" placeholder="masukkan kelurahan"
                        value="{{ $toko->kelurahan }}">
                    @error('kelurahan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </dd>

                <dt class="col-sm-3 fw-normal">Deskripsi</dt>
                <dd class="col-sm-9">
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" placeholder="masukkan deskripsi" rows="5">{{ $toko->deskripsi }}</textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror    
                </dd>
                
            </dl>

            <button type="submit" class="btn btn-success float-right">Update</button>
        </form>
        </div>
    </div>


</div>
@endsection

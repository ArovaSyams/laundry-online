@extends('layouts.apphome')

@section('content')
<div class="container" style="margin-top: 80px">

    <div class="row">
        <div class="col">

            <h3>Pesan Jasa</h3>

            <div class="card p-0">
                <div class="card-body p-3">
                    <p class="lh-base"><i class="fas fa-store "></i> {{ $toko->user->nama }} <br>
                    <span class="text-muted">{{ $toko->kota }}</span>
                    </p>

                    <div class="row">
                        <div class="col-md-2">
                            <img class="rounded" width="100%" src="/dist/img/photo2.png" alt="">

                        </div>
                        <div class="col-md-10 pt-4">
                            <h5>{{ $toko->nama_toko }}</h5>
                            <p class="fs-4 fw-bold">Rp {{ $toko->harga }} / {{ $toko->metode_penjualan }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h3>Pemesanan</h3>

                <div class="card">
                    <div class="card-body">
                        
                        
                        <p>{{ Auth::user()->nama }} ({{ Auth::user()->no_telp }})</p>
                        @if (!$alamat)
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                            Tambah Alamat
                        </button>
                        @else
                        
                        <p class="text-muted">Kel. {{ $alamat->kelurahan }}, Kec. {{ $alamat->kecamatan }}, Kab. {{ $alamat->kota }}, Prov. {{ $alamat->provinsi }} <br> {{ $alamat->alamat }}</p>
                        
                        <div class="mb-3">
                            <label for="nama" class="fw-normal">Tanggal Pemesanan</label>
                            <input type="date" class="form-control @error('nama') is-invalid @enderror"id="nama" name="nama">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="fw-normal">Waktu Pengambilan</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih waktu</option>
                                <option value="1">Pagi ({{ $toko->jam_buka_mulai }} - 10:00)</option>
                                <option value="2">Siang (10:00 - 14:00)</option>
                                <option value="3">Sore (14:00 - {{ $toko->jam_buka_sampai }})</option>
                            </select>
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        @endif

                        <!-- Button trigger modal -->
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Alamat</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="/user-tambah-alamat">
                                        @csrf
                                        <input id="id" name="id" type="hidden">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label fw-normal ">Nama</label>
                                            <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="" value="{{ old('nama') }}">
                                            @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>  
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" rows="3" name="alamat"></textarea>
                                            @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="provinsi" class="form-label fw-normal">Provinsi</label>
                                            <input id="provinsi" type="text" class="form-control @error('provinsi') is-invalid @enderror" name="provinsi" id="provinsi" placeholder="" value="{{ old('provinsi') }}">
                                            @error('provinsi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>  
    
                                        <div class="mb-3">
                                            <label for="kota" class="form-label fw-normal">Kota</label>
                                            <input id="kota" type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" id="kota" placeholder="" value="{{ old('kota') }}">
                                            @error('kota')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="kecamatan" class="form-label fw-normal">Kecamatan</label>
                                            <input id="kecamatan" type="text" class="form-control @error('kecamatan') is-invalid @enderror" name="kecamatan" id="kecamatan" placeholder="" value="{{ old('kecamatan') }}">
                                            @error('kecamatan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="kelurahan" class="form-label fw-normal">Kelurahan</label>
                                            <input id="kelurahan" type="text" class="form-control @error('kelurahan') is-invalid @enderror" name="kelurahan" id="kelurahan" placeholder="" value="{{ old('kelurahan') }}">
                                            @error('kelurahan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        
                                        
                                        <div class="mb-3">
                                            <label for="no_telp" class="form-label fw-normal">no_telp</label>
                                            <input id="notelp" type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp"
                                                name="no_telp" placeholder="masukkan no_telp" value="{{ old('no_telp') }}">
                                            @error('no_telp')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>

        </div>
    </div>

</div>

@endsection
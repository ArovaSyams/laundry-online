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
                        
                        
                        @if (!$alamat)
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                            Tambah Alamat
                        </button>
                        @else
                        
                        @if (request('daftar-alamat'))
                        <div class="d-flex bd-highlight mb-3">
                            <div class="me-auto p-2 bd-highlight">
                                <p>{{ $alamat->first()->nama }} ({{ $alamat->first()->no_telp }})</p>
                                <p class="text-muted">Kel. {{ $alamat->first()->kelurahan }}, Kec. {{ $alamat->first()->kecamatan }}, Kab. {{ $alamat->first()->kota }}, Prov. {{ $alamat->first()->provinsi }} <br> {{ $alamat->first()->alamat }}</p>
                            </div>

                            <div class="p-2 bd-highlight">
                                <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#daftarAlamat">
                                    Pilih Alamat
                                </button>
                            </div>                            
                        </div>
                        @else
                        <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#daftarAlamat">
                            Pilih Alamat
                        </button>

                        @endif
                        
                        <form action="/order" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="fw-normal">Tanggal Pemesanan</label>
                            <input type="date" class="form-control @error('nama') is-invalid @enderror"id="nama" name="tanggal_pemesanan">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="fw-normal">Waktu Pengambilan</label>
                            <select class="form-select" name="waktu_pengambilan">
                                <option selected>Pilih waktu</option>
                                <option value="Pagi">Pagi ({{ $toko->jam_buka_mulai }} - 10:00)</option>
                                <option value="Siang">Siang (10:00 - 14:00)</option>
                                <option value="Sore">Sore (14:00 - {{ $toko->jam_buka_sampai }})</option>
                            </select>
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="toko_id" value="{{ $toko->id }}">
                            <input type="hidden" name="alamat" value="{{ $alamat->first()->alamat }}">
                            <input type="hidden" name="provinsi" value="{{ $alamat->first()->provinsi }}">
                            <input type="hidden" name="kota" value="{{ $alamat->first()->kota }}">
                            <input type="hidden" name="kecamatan" value="{{ $alamat->first()->kecamatan }}">
                            <input type="hidden" name="kelurahan" value="{{ $alamat->first()->kelurahan }}">
                            
                            <button type="submit" class="btn btn-success">Pesan Sekarang</button>
                        </form>
                        
                        @endif

                        
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

 
                        <!-- Modal -->
                        <div class="modal fade" id="daftarAlamat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Pilih Alamat</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                @foreach ($daftar_alamat as $alamat)

                                <div class="card">
                                    <div class="p-3">
                                        <div class="d-flex bd-highlight mb-3">

                                            <div class="me-auto p-2 bd-highlight">    
                                                <p>{{ $alamat->nama }} ({{ $alamat->no_telp }})</p>
                                                <p class="text-muted">Kel. {{ $alamat->kelurahan }}, Kec. {{ $alamat->kecamatan }}, Kab. {{ $alamat->kota }}, Prov. {{ $alamat->provinsi }} <br> {{ $alamat->alamat }}</p>
                                            </div>

                                            <div class="p-2 bd-highlight">
                                                <form action="/pesan-jasa/{{ $toko->id }}" method="get">
                                                    <input type="hidden" name="daftar-alamat" value="{{ $alamat->id }}">
                                                    <button class="btn btn-info">Pilih</button>    
                                                </form>
                                            </div>                            
                                        </div>

                                    </div>
                                </div>
                                    
                                @endforeach

                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                    Tambah Alamat
                                </button>

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
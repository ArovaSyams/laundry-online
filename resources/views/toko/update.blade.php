@extends('layouts.app')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="font-weight: 500">Edit Toko</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Toko</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="card ">
                <div class="card-header">
                    <i class="fas fa-edit mr-1"></i>
                    Data Toko
                </div>
                <div class="card-body">
                    <form method="POST" action="/toko/{{ $toko->id }}">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_toko" class="form-label">Nama Toko</label>
                            <input type="text" class="form-control @error('nama_toko') is-invalid @enderror" id="nama_toko"
                                name="nama_toko" placeholder="{{ $toko->nama_toko }}" value="{{ $toko->nama_toko }}">
                            @error('nama_toko')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="user_id" class="form-label">user ID</label>
                            <input type="text" class="form-control @error('user_id') is-invalid @enderror" id="user_id"
                                name="user_id" placeholder="{{ $toko->user_id }}" value="{{ $toko->user_id }}">
                            @error('user_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">alamat</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                                name="alamat" placeholder="{{ $toko->alamat }}" value="{{ $toko->alamat }}">
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="provinsi" class="form-label">provinsi</label>
                            <input type="text" class="form-control @error('provinsi') is-invalid @enderror" id="provinsi"
                                name="provinsi" placeholder="{{ $toko->provinsi }}" value="{{ $toko->provinsi }}">
                            @error('provinsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="kota" class="form-label">kota</label>
                            <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota"
                                name="kota" placeholder="{{ $toko->kota }}" value="{{ $toko->kota }}">
                            @error('kota')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="kecamatan" class="form-label">kecamatan</label>
                            <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan"
                                name="kecamatan" placeholder="{{ $toko->kecamatan }}" value="{{ $toko->kecamatan }}">
                            @error('kecamatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="kelurahan" class="form-label">kelurahan</label>
                            <input type="text" class="form-control @error('kelurahan') is-invalid @enderror" id="kelurahan"
                                name="kelurahan" placeholder="{{ $toko->kelurahan }}" value="{{ $toko->kelurahan }}">
                            @error('kelurahan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="foto_1" class="form-label">foto_1</label>
                            <input type="text" class="form-control @error('foto_1') is-invalid @enderror" id="foto_1"
                                name="foto_1" placeholder="{{ $toko->foto_1 }}" value="{{ $toko->foto_1 }}">
                            @error('foto_1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="foto_2" class="form-label">foto_2</label>
                            <input type="text" class="form-control @error('foto_2') is-invalid @enderror" id="foto_2"
                                name="foto_2" placeholder="{{ $toko->foto_2 }}" value="{{ $toko->foto_2 }}">
                            @error('foto_2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="foto_3" class="form-label">foto_3</label>
                            <input type="text" class="form-control @error('foto_3') is-invalid @enderror" id="foto_3"
                                name="foto_3" placeholder="{{ $toko->foto_3 }}" value="{{ $toko->foto_3 }}">
                            @error('foto_3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">deskripsi</label>
                            <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi"
                                name="deskripsi" placeholder="masukkan deskripsi" value="{{ $toko->deskripsi }}">
                            @error('deskripsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="metode_penjualan" class="form-label">metode_penjualan</label>
                            <select class="form-select  @error('metode_penjualan') is-invalid @enderror"
                                id="metode_penjualan" name="metode_penjualan">
                                <option selected value="{{ $toko->metode_penjualan }}">{{ $toko->metode_penjualan }}
                                </option>
                                <option value="Kiloan">Kiloan</option>
                                <option value="Bijian">Bijian</option>
                            </select>
                            @error('metode_penjualan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <div class="mb-3">
                            <label for="harga" class="form-label">harga</label>
                            <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga"
                                name="harga" placeholder="{{ $toko->harga }}" value="{{ $toko->harga }}">
                            @error('harga')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <label for="hari_kerja_mulai" class="form-label">hari_kerja</label>
                        <select class="form-select mb-3 @error('hari_kerja_mulai') is-invalid @enderror"
                            id="hari_kerja_mulai" name="hari_kerja_mulai">
                            <option selected value="{{ $toko->hari_kerja_mulai }}">{{ $toko->hari_kerja_mulai }}
                            </option>
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
                        <select class="form-select mb-3 @error('hari_kerja_sampai') is-invalid @enderror"
                            id="hari_kerja_sampai" name="hari_kerja_sampai">
                            <option selected value="{{ $toko->hari_kerja_sampai }}">{{ $toko->hari_kerja_sampai }}
                            </option>
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

                        <div class="mb-3">
                            <label for="jam_buka_mulai" class="form-label">jam_buka_mulai</label>
                            <input type="time" class="form-control @error('jam_buka_mulai') is-invalid @enderror"
                                id="jam_buka_mulai" name="jam_buka_mulai" placeholder="07:00 WIB"
                                value="{{ $toko->jam_buka_mulai }}">
                            @error('jam_buka_mulai')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jam_buka_sampai" class="form-label">jam_tutup</label>
                            <input type="time" class="form-control @error('jam_buka_sampai') is-invalid @enderror"
                                id="jam_buka_sampai" name="jam_buka_sampai" placeholder="18:00 WIB"
                                value="{{ $toko->jam_buka_sampai }}">
                            @error('jam_buka_sampai')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

@endsection

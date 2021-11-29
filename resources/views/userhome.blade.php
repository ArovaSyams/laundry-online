@extends('layouts.apphome')

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> --}}
    <section class="" style="margin-top: 100px">
        <div class="row">
            <div class="col col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="user-panel d-flex">
                            <div class="image">
                                <img src="/img/{{ Auth::user()->foto }}" class="img-circle elevation-1 " alt="User Image">
                            </div>
                            <div class="info">
                                <h5 class="">{{ Auth::user()->nama }}</h5>
                                <p class="text-muted"><i class="fas fa-coins    "></i> {{ Auth::user()->point }} Point</p>
                            </div>
                        </div>
                        <hr>
                        <div class="page-profil">
                            <h5>Profil Saya</h5>
                            <ul class="lh-lg" style="list-style: none">
                                <li id="biodataDiriBtn" style="cursor: pointer">Biodata Diri</li>
                                <li id="daftarAlamatBtn" style="cursor: pointer">Alamat</li>
                                <li id="keamananBtn" style="cursor: pointer">Keamanan</li>
                                <li id="tokoFollowBtn" style="cursor: pointer">Toko Yang Diikuti</li>
                            </ul>
                            <h5>Pemesanan</h5>
                            <ul class="lh-lg" style="list-style: none">
                                <li id="dalamProsesPemesananBtn" style="cursor: pointer">Pemesanan Dalam Proses</li>
                                <li id="daftarTransaksiBtn" style="cursor: pointer">Histori Daftar Transaksi</li>
                            </ul>
                            <h5>Toko</h5>
                            <ul class="lh-lg" style="list-style: none">
                                <li id="buatTokoBtn" style="cursor: pointer">Buat Toko</li>
                                <li id="daftarTokoBtn" style="cursor: pointer">Profil / Cabang Toko</li>
                                <li id="dalamProsesPemesananTokoBtn" style="cursor: pointer">Pemesanan Dalam Proses</li>
                                <li id="daftarPesananBtn" style="cursor: pointer">Daftar Pesanan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div id="biodataDiri">
                            <div id="biodataDiri2">
                                <div class="row">
                                    <div class="col col-md-4">
                                        <div class="card">
                                            <img src="/img/{{ Auth::user()->foto }}" class="rounded-top" alt="">
                                            <div class="card-body">
                                                <form action="/userfoto/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="foto_lama" value="default.jpg">
                                                    <div class="mb-3">       
                                                        <label for="foto">Ganti Foto</label>                                         
                                                        <input class="form-control @error('foto') is-invalid @enderror" type="file" id="foto" name="foto">
                                                        @error('foto')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <button type="submit" class="btn btn-success">Edit Foto</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-md-8">
                                        <div>
                                            <div id="biodata-diri">
                                                <h4>Biodata Diri</h4>
                                                <table class="table">
                                                    <tbody>
                                                        <tr style="height: 40px">
                                                            <td scope="row" style="width: 130px">Nama</td>
                                                            <td>: {{ Auth::user()->nama }}</td>
                                                        </tr>
                                                        <tr style="height: 40px">
                                                            <td scope="row" style="width: 130px">Jenis Kelamin</td>
                                                            <td>: {{ Auth::user()->jenis_kelamin }}</td>
                                                        </tr>
                                                        <tr style="height: 40px">
                                                            <td scope="row" style="width: 130px">Tanggal Lahir</td>
                                                            <td>: {{ Auth::user()->tanggal_lahir }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="kontak mt-5">
                                                <h4>Kontak</h4>
                                                <table class="table">
                                                    <tbody>
                                                        <tr style="height: 40px">
                                                            <td scope="row" style="width: 130px">Email</td>
                                                            <td>: {{ Auth::user()->email }}</td>
                                                        </tr>
                                                        <tr style="height: 40px">
                                                            <td scope="row" style="width: 130px">Nomor Telepon</td>
                                                            <td>: {{ Auth::user()->no_telp }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>       
                                            </div>
                                            <div class="button">
                                                <button id="editDataDiri" class="btn btn-success">Edit data diri</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="biodataDiri3" class="d-none">
                                <h4>Edit Data Diri</h4>
                                <hr>
                                <button id="backEditDataDiri" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
                                <form method="POST" action="/user-datadiri/{{ Auth::user()->id  }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                                            name="nama" placeholder="Sriwijaya Laundry" value="{{ Auth::user()->nama }}">
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>  

                                    <div class="mb-3">
                                        <label for="jenis_kelamin" class="form-label">jenis_kelamin</label>
                                        <select class="form-select  @error('jenis_kelamin') is-invalid @enderror"
                                            id="jenis_kelamin" name="jenis_kelamin">
                                            <option selected value="{{ Auth::user()->jenis_kelamin }}">{{ Auth::user()->jenis_kelamin }}</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        @error('jenis_kelamin')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
            
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="tanggal_lahir" class="form-label">tanggal_lahir</label>
                                        <input type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                        id="tanggal_lahir" name="tanggal_lahir" placeholder="masukkan tanggal_lahir"
                                        value="{{ Auth::user()->tanggal_lahir }}">
                                        @error('tanggal_lahir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">email</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                                            name="email" placeholder="masukkan email" value="{{ Auth::user()->email }}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="no_telp" class="form-label">no_telp</label>
                                        <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp"
                                            name="no_telp" placeholder="masukkan no_telp" value="{{ Auth::user()->no_telp }}">
                                        @error('no_telp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>
                            </div>

                        </div>

                        <div id="daftarAlamat" class="d-none">
                            <div class="row">
                                <div class="col">
                                    <h4>Alamat</h4>
                                    <hr>

                                    <form action="/user-alamat/{{ Auth::user()->id }}" method="POST">
                                        @csrf
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td scope="row">Provinsi</td>
                                                    <td>
                                                        <input type="text" class="form-control @error('provinsi') is-invalid @enderror" name="provinsi" id="provinsi" placeholder="" value="{{ Auth::user()->provinsi }}">
                                                        @error('provinsi')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">Kota</td>
                                                    <td>
                                                        <input type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" id="kota" placeholder="" value="{{ Auth::user()->kota }}">
                                                        @error('kota')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">Kecamatan</td>
                                                    <td>
                                                        <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" name="kecamatan" id="kecamatan" placeholder="" value="{{ Auth::user()->kecamatan }}">
                                                        @error('kecamatan')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">Kelurahan</td>
                                                    <td>
                                                        <input type="text" class="form-control @error('kelurahan') is-invalid @enderror" name="kelurahan" id="kelurahan" placeholder="" value="{{ Auth::user()->kelurahan }}">
                                                        @error('kelurahan')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">Alamat</td>
                                                    <td>
                                                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" placeholder="" value="{{ Auth::user()->alamat }}">
                                                        @error('alamat')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <button type="submit" class="btn btn-success">Edit</button>
                                    </form>
                                      
                                </div>
                            </div>

                        </div>

                        <div id="keamanan" class="d-none">

                            <h4>Keamanan</h4>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <h4>Ubah Password</h4>
                                    <form method="POST" action="/password/update/{{ Auth::user()->id }}">
                                        @csrf

                                        {{-- <input type="hidden" name="email" value="{{ Auth::user()->email }}"> --}}
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="fw-normal mb-1" for="password">Password</label>
                                                    <input class="form-control py-4 @error('password') is-invalid @enderror" id="password" name="password" type="password" placeholder="Masukkan password" />
                                                    @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="fw-normal mb-1" for="password_confirmation">Konfirmasi Password</label>
                                                    <input class="form-control py-4" id="password_confirmation" name="password_confirmation" required type="password" placeholder="Konfirmasi password" />
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success">
                                            {{ __('Reset Password') }}
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div id="tokoFollow" class="d-none">
                            <div class="row">
                                <div class="col">
                                    <h4>Toko Yang Diikuti</h4>
                                    <hr>                                    
                                    <p class="float-start">Mengikuti : {{ $langganan->count() }} Toko</p>
                                    {{-- <p class="text-end">Diikuti : 5 User</p> --}}
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>foto</th>
                                                <th>Nama Toko</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($langganan as $l)
                                                
                                            <tr>
                                                <td scope="row">{{ $l->id }}</td>
                                                <td>{{ $l->toko->foto_1 }}</td>
                                                <td>{{ $l->toko->nama_toko }}</td>
                                                <td>
                                                    <form action="/langganan/{{ $l->id }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Berhenti Mengikuti</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        {{-- dalam proses pemesanan --}}
                        <div id="dalamProsesPemesanan" class="d-none">
                            <div class="row">
                                <div class="col">
                                    <h4>Pemesanan Dalam Proses</h4>
                                    <hr>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Toko</th>
                                                <th>Tanggal Pemesanan</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($order as $o)
                                            <tr>
                                                <td scope="row">{{ $o->id }}</td>
                                                <td>{{ $o->toko->nama_toko }}</td>
                                                <td>{{ $o->tanggal_pemesanan }}</td>
                                                <td><button type="button" id="statusBtn" class="btn btn-success" data-id="{{ $o->id }}">Status</button></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        {{-- status pemesanan --}}
                        <div id="statusPemesanan" class="d-none">
                            <div class="row">
                                <div class="col">
                                    <h4>Status Pemesanan</h4>
                                    <hr>
                                    <button type="button" id="backStatusPemesanan" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
                                </div>
                            </div>

                        </div>

                        <div id="daftarTransaksi" class="d-none">
                            <div class="row">
                                <div class="col">
                                    <h4>Histori Daftar Transaksi</h4>
                                    <hr>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Toko</th>
                                                <th>Tanggal Jadi</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($order as $o)
                                                <?php if($o->tanggal_jadi !== null) { ?>
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td>{{ $o->toko->nama_toko }}</td>
                                                        <td>{{ $o->tanggal_jadi }}</td>
                                                        <td><a href="" class="btn btn-success">Detail</a></td>
                                                    </tr>                        
                                                <?php } ?>                            
                                                @endforeach
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="buatToko" class="d-none">
                            <div class="row">
                                <div class="col">
                                    <h4>Buat Toko</h4>
                                    <hr>
                                    <div id="buatTokoText">
                                        <p class="text-muted mt-2">Mari buat toko laundry anda untuk jangkauan pasar yang lebih luas</p>
                                        <button id="buatTokoBtn2" class="btn btn-primary">Buat Toko | Cabang Baru</button>
                                    </div>
                                    <div id="buatTokoForm" class="d-none">
                                        <button id="buatTokoBack" class="btn btn-danger mb-2"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
                                        <form method="POST" action="/toko" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                            <div class="mb-3">
                                                <label for="nama_toko" class="form-label">Nama Toko</label>
                                                <input type="text" class="form-control @error('nama_toko') is-invalid @enderror" id="nama_toko"
                                                    name="nama_toko" placeholder="Sriwijaya Laundry" value="{{ old('nama_toko') }}">
                                                @error('nama_toko')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            {{-- <div class="mb-3">
                                                <label for="user_id" class="form-label">user_id</label>
                                                <input type="text" class="form-control @error('user_id') is-invalid @enderror" id="user_id"
                                                    name="user_id" placeholder="masukkan user_id" value="{{ old('user_id') }}">
                                                @error('user_id')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div> --}}
                                            <div class="mb-3">
                                                <label for="alamat" class="form-label">alamat</label>
                                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                                                    name="alamat" placeholder="masukkan alamat" value="{{ old('alamat') }}">
                                                @error('alamat')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="provinsi" class="form-label">provinsi</label>
                                                <input type="text" class="form-control @error('provinsi') is-invalid @enderror" id="provinsi"
                                                    name="provinsi" placeholder="masukkan provinsi" value="{{ old('provinsi') }}">
                                                @error('provinsi')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="kota" class="form-label">kota</label>
                                                <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota"
                                                    name="kota" placeholder="masukkan kota" value="{{ old('kota') }}">
                                                @error('kota')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="kecamatan" class="form-label">kecamatan</label>
                                                <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan"
                                                    name="kecamatan" placeholder="masukkan kecamatan" value="{{ old('kecamatan') }}">
                                                @error('kecamatan')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="kelurahan" class="form-label">kelurahan</label>
                                                <input type="text" class="form-control @error('kelurahan') is-invalid @enderror" id="kelurahan"
                                                    name="kelurahan" placeholder="masukkan kelurahan" value="{{ old('kelurahan') }}">
                                                @error('kelurahan')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                    
                                            <div class="mb-3">
                                                <label for="foto_1" class="form-label">Foto_1</label>
                                                <input class="form-control @error('foto_1') is-invalid @enderror" type="file" id="foto_1" name="foto_1">
                                                @error('foto_1')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="foto_2" class="form-label">Foto_2</label>
                                                <input class="form-control @error('foto_2') is-invalid @enderror" type="file" id="foto_2" name="foto_2">
                                                @error('foto_2')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="foto_3" class="form-label">Foto_3</label>
                                                <input class="form-control @error('foto_3') is-invalid @enderror" type="file" id="foto_3" name="foto_3">
                                                @error('foto_3')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                    
                                            <div class="mb-3">
                                                <label for="deskripsi" class="form-label">deskripsi</label>
                                                <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi"
                                                    name="deskripsi" placeholder="masukkan deskripsi" value="{{ old('deskripsi') }}">
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
                                                    <option selected value="{{ old('metode_penjualan') }}">Metode Penjualan</option>
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
                                                    name="harga" placeholder="10.000 Per Kilo" value="{{ old('harga') }}">
                                                @error('harga')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            {{-- <div class="mb-3">
                                        <input type="text" class="form-control" id="hari_kerja_mulai" name="hari_kerja_mulai" placeholder="masukkan hari_kerja_mulai">
                                    </div> --}}
                                            <label for="hari_kerja_mulai" class="form-label">hari_kerja</label>
                                            <select class="form-select mb-3 @error('hari_kerja_mulai') is-invalid @enderror"
                                                id="hari_kerja_mulai" name="hari_kerja_mulai">
                                                <option selected value="{{ old('hari_kerja_mulai') }}">Mulai Hari Kerja</option>
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
                                                <option selected value="{{ old('hari_kerja_sampai') }}">Sampai Hari</option>
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
                                                    value="{{ old('jam_buka_mulai') }}">
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
                                                    value="{{ old('jam_buka_sampai') }}">
                                                @error('jam_buka_sampai')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="daftarToko" class="d-none">
                            <div id="daftarToko2">
                                <h4>Profil Toko</h4>
                                <hr>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Toko</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">1</td>
                                            <td>Jaya Selamanya Laundry</td>
                                            <td><button type="button" class="btn btn-success" id="profilBtn">Profil</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div id="profilToko" class="d-none">

                                <div class="row">
                                    <div class="col col-md-4">
                                        <button id="profilTokoBack" class="btn btn-danger mb-2"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
                                        <div class="card">
                                            <img src="/dist/img/photo1.png" class="rounded" alt="">
                                            <div class="card-body">
                                                <form action="">
                                                    <div class="mb-3">       
                                                        <label for="foto">Ganti Foto 1</label>                                         
                                                        <input class="form-control @error('foto') is-invalid @enderror" type="file" id="foto" name="foto">
                                                        @error('foto')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="/dist/img/photo1.png" class="rounded" alt="">                                        
                                            <div class="card-body">
                                                <form action="">
                                                    <div class="mb-3">       
                                                        <label for="foto">Ganti Foto 2</label>                                         
                                                        <input class="form-control @error('foto') is-invalid @enderror" type="file" id="foto" name="foto">
                                                        @error('foto')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="/dist/img/photo1.png" class="rounded" alt="">                                        
                                            <div class="card-body">
                                                <form action="">
                                                    <div class="mb-3">       
                                                        <label for="foto">Ganti Foto 3</label>                                         
                                                        <input class="form-control @error('foto') is-invalid @enderror" type="file" id="foto" name="foto">
                                                        @error('foto')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-md-8">
                                        <div>
                                            <div id="biodata-diri">
                                                <h4>Profil Toko</h4>
                                                <table class="table">
                                                    <tbody>
                                                        <tr style="height: 40px">
                                                            <td scope="row" style="width: 150px">Nama Toko</td>
                                                            <td>: Bisa Maju Laundry</td>
                                                        </tr>
                                                        <tr style="height: 40px">
                                                            <td scope="row" style="width: 130px">Rating</td>
                                                            <td>: 5</td>
                                                        </tr>
                                                        <tr style="height: 40px">
                                                            <td scope="row" style="width: 130px">Metode Penjualan</td>
                                                            <td>: Kiloan</td>
                                                        </tr>
                                                        <tr style="height: 40px">
                                                            <td scope="row" style="width: 130px">Harga</td>
                                                            <td>: Rp 10.000 / Kilo</td>
                                                        </tr>
                                                        
                                                        <tr style="height: 40px">
                                                            <td scope="row" style="width: 130px">Hari Buka</td>
                                                            <td>: Senin - Jumat</td>
                                                        </tr>
                                                        <tr style="height: 40px">
                                                            <td scope="row" style="width: 130px">Jam Buka</td>
                                                            <td>: 08.00 WIB - 18.00 WIB</td>
                                                        </tr>
                                                        <tr style="height: 40px">
                                                            <td scope="row" style="width: 130px">Deskripsi</td>
                                                            <td>: Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, eaque culpa. Qui, ex error illo voluptates nam ea inventore hic, corporis dolore quae mollitia nemo voluptatibus corrupti velit sapiente saepe.</td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="alamat mt-5">
                                                <h4>Alamat</h4>
                                                <table class="table">
                                                    <tbody>
                                                        <tr style="height: 40px">
                                                            <td scope="row" style="width: 130px">Provinsi</td>
                                                            <td>: Bengkulu</td>
                                                        </tr>
                                                        <tr style="height: 40px">
                                                            <td scope="row" style="width: 130px">Kota</td>
                                                            <td>: Kota Bengkulu</td>
                                                        </tr>
                                                        <tr style="height: 40px">
                                                            <td scope="row" style="width: 130px">Kecamatan</td>
                                                            <td>: Gading Cempaka</td>
                                                        </tr>
                                                        <tr style="height: 40px">
                                                            <td scope="row" style="width: 130px">Kelurahan</td>
                                                            <td>: Sidomulyo</td>
                                                        </tr>
                                                        <tr style="height: 40px">
                                                            <td scope="row" style="width: 130px">Alamat</td>
                                                            <td>: Jln. Hibrida 8 No. 13A kel. Sidomulyo Kec. Gading Cempaka Kota Bengkulu</td>
                                                        </tr>
                                                    </tbody>
                                                </table>       
                                            </div>
                                            <div class="kontak mt-5">
                                                <h4>Kontak</h4>
                                                <table class="table">
                                                    <tbody>
                                                        <tr style="height: 40px">
                                                            <td scope="row" style="width: 130px">Email</td>
                                                            <td>: Wifqo Arova Syams</td>
                                                        </tr>
                                                        <tr style="height: 40px">
                                                            <td scope="row" style="width: 130px">Nomor Telepon</td>
                                                            <td>: Laki-laki</td>
                                                        </tr>
                                                    </tbody>
                                                </table>       
                                            </div>
                                            <div class="button">
                                                <a href="" class="btn btn-success">Edit data toko</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="dalamProsesPemesananToko" class="d-none">
                            <div class="row">
                                <div class="col">
                                    <h4>Pesanan Dalam Proses</h4>
                                    <hr>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>User</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">1</td>
                                                <td>Bima</td>
                                                <td>
                                                    <button class="btn btn-success">Detail</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="daftarPesanan" class="d-none">
                            <div class="row">
                                <div class="col">
                                    <h4>Daftar Histori Pesanan</h4>
                                    <hr>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>User</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">1</td>
                                                <td>Bima</td>
                                                <td>
                                                    <button class="btn btn-success">Detail</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>


</div>
@endsection

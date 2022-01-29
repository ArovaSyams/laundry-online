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
        @if (session()->has('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('pesan') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="row">
            <div class="col col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class=" d-flex">
                            <div class="image">
                                <img src="/img/{{ Auth::user()->foto }}" class="rounded-circle elevation-1" height="50px" width="50px" style="object-fit: cover" alt="User Image">
                            </div>
                            <div class="info ml-3">
                                <h5 class="">{{ Auth::user()->nama }}</h5>
                                <p class="text-muted"><i class="fas fa-coins"></i> {{ Auth::user()->point }} Point</p>
                            </div>
                        </div>
                        <hr>
                        <div class="page-profil">
                            <h5>Profil Saya</h5>
                            <ul class="lh-lg" style="list-style: none">
                                <li id="biodataDiriBtn" style="cursor: pointer">Biodata Diri</li>
                                <li id="daftarAlamatBtn" style="cursor: pointer">Daftar Alamat</li>
                                <li id="keamananBtn" style="cursor: pointer">Keamanan</li>
                                <li id="tokoFollowBtn" style="cursor: pointer">Toko Yang Diikuti</li>
                            </ul>
                            <h5>Pemesanan</h5>
                            <ul class="lh-lg" style="list-style: none">
                                <li id="dalamProsesPemesananBtn" style="cursor: pointer">Pemesanan Dalam Proses</li>
                                <li id="daftarTransaksiBtn" style="cursor: pointer">Histori Transaksi</li>
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
                                    <div id="daftarAlamat2">
                                        <h4>Daftar Alamat</h4>
                                        <hr>
                                        <button id="tambahAlamatBtn" class="btn btn-success mb-3">Tambah Alamat</button>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Alamat</th>
                                                    <th>Provinsi</th>
                                                    <th>Kota</th>
                                                    <th>Kecamatan</th>
                                                    <th>Kelurahan</th>
                                                    <th>No. Telp</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($alamat as $l)
                                                
                                                <tr>
                                                        <td>{{ $l->nama }}</td>
                                                        <td>{{ $l->alamat }}</td>
                                                        <td>{{ $l->provinsi }}</td>
                                                        <td>{{ $l->kota }}</td>
                                                        <td>{{ $l->kecamatan }}</td>
                                                        <td>{{ $l->kelurahan }}</td>
                                                        <td>{{ $l->no_telp }}</td>
                                                        <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#editAlamatModal" 
                                                            data-id="{{ $l->id }}"
                                                            data-nama="{{ $l->nama }}"
                                                            data-alamat="{{ $l->alamat }}"
                                                            data-provinsi="{{ $l->provinsi }}"
                                                            data-kota="{{ $l->kota }}"
                                                            data-kecamatan="{{ $l->kecamatan }}"
                                                            data-kelurahan="{{ $l->kelurahan }}"
                                                            data-notelp="{{ $l->no_telp }}"
                                                        ><i class="fas fa-edit    "></i></button>

                                                        <form action="/delete-alamat/{{ $l->id }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger mt-1"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                        </form>
                                                        </td>
                                                        
                                                    </tr>
                                                
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="modal fade" id="editAlamatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Alamat</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="/user-alamat">
                                                @csrf
                                                <input id="id" name="id" type="hidden">
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label fw-normal">Nama</label>
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
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    
                                    <div id="daftarAlamat3" class="d-none">   
                                        <h4>Tambah Alamat</h4>
                                        <hr>
                                        <button id="backTambahAlamat" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
                                        <form method="POST" action="/user-tambah-alamat">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="nama" class="form-label fw-normal">Nama</label>
                                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="" value="{{ old('nama') }}">
                                                @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>  
                                            <div class="mb-3">
                                                <label for="alamat" class="form-label">Alamat</label>
                                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" placeholder="" value="{{ old('alamat') }}">
                                                @error('alamat')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="provinsi" class="form-label">Provinsi</label>
                                                <input type="text" class="form-control @error('provinsi') is-invalid @enderror" name="provinsi" id="provinsi" placeholder="" value="{{ old('provinsi') }}">
                                                @error('provinsi')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>  
        
                                            <div class="mb-3">
                                                <label for="kota" class="form-label">Kota</label>
                                                <input type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" id="kota" placeholder="" value="{{ old('kota') }}">
                                                @error('kota')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                    
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                                <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" name="kecamatan" id="kecamatan" placeholder="" value="{{ old('kecamatan') }}">
                                                @error('kecamatan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="kelurahan" class="form-label">Kelurahan</label>
                                                <input type="text" class="form-control @error('kelurahan') is-invalid @enderror" name="kelurahan" id="kelurahan" placeholder="" value="{{ old('kelurahan') }}">
                                                @error('kelurahan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            
                                            
                                            <div class="mb-3">
                                                <label for="no_telp" class="form-label">no_telp</label>
                                                <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp"
                                                    name="no_telp" placeholder="masukkan no_telp" value="{{ old('no_telp') }}">
                                                @error('no_telp')
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
                                                    <form action="/lax`ngganan/{{ $l->id }}" method="POST">
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

                        

                    </div>
                </div>
            </div>
        </div>

    </section>


</div>
@endsection

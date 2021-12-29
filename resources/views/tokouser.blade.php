@extends('layouts.apphome')

@section('content')
    <div class="container">

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
                                    <img src="/img/{{ Auth::user()->foto }}" class="img-circle elevation-1 " height="50px" width="50px" style="object-fit: cover"
                                        alt="User Image">
                                </div>
                                <div class="info">
                                    <h5 class="">{{ Auth::user()->nama }}</h5>
                                    <p class="text-muted"><i class="fas fa-coins"></i> {{ Auth::user()->point }}
                                        Point</p>
                                </div>
                            </div>
                            <hr>
                            <div class="page-profil">
                                <h5>Toko</h5>
                                <ul class="lh-lg" style="list-style: none">
                                    <li id="buatTokoBtn" style="cursor: pointer">Buat Toko</li>
                                    <li id="daftarTokoBtn" style="cursor: pointer">Profil Toko</li>
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
                            <div id="buatToko" class="">
                                <div class="row">
                                    <div class="col">
                                        <h4>Buat Toko</h4>
                                        <hr>
                                        <div id="buatTokoText">
                                            <p class="text-muted mt-2">Mari buat toko laundry anda untuk jangkauan pasar
                                                yang lebih luas</p>
                                            <button id="buatTokoBtn2" class="btn btn-primary">Buat Toko | Cabang
                                                Baru</button>
                                        </div>
                                        <div id="buatTokoForm" class="d-none">
                                            <button id="buatTokoBack" class="btn btn-danger mb-2"><i
                                                    class="fa fa-arrow-left" aria-hidden="true"></i></button>
                                            <form method="POST" action="/toko" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                <div class="mb-3">
                                                    <label for="nama_toko" class="form-label">Nama Toko</label>
                                                    <input type="text"
                                                        class="form-control @error('nama_toko') is-invalid @enderror"
                                                        id="nama_toko" name="nama_toko" placeholder="Sriwijaya Laundry"
                                                        value="{{ old('nama_toko') }}">
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
                                                    <input type="text"
                                                        class="form-control @error('alamat') is-invalid @enderror"
                                                        id="alamat" name="alamat" placeholder="masukkan alamat"
                                                        value="{{ old('alamat') }}">
                                                    @error('alamat')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="no_telp" class="form-label">No. Telepon</label>
                                                    <input type="text"
                                                        class="form-control @error('no_telp') is-invalid @enderror"
                                                        id="no_telp" name="no_telp" placeholder="masukkan no_telp"
                                                        value="{{ old('no_telp') }}">
                                                    @error('no_telp')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="provinsi" class="form-label">provinsi</label>
                                                    <input type="text"
                                                        class="form-control @error('provinsi') is-invalid @enderror"
                                                        id="provinsi" name="provinsi" placeholder="masukkan provinsi"
                                                        value="{{ old('provinsi') }}">
                                                    @error('provinsi')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="kota" class="form-label">kota</label>
                                                    <input type="text"
                                                        class="form-control @error('kota') is-invalid @enderror" id="kota"
                                                        name="kota" placeholder="masukkan kota"
                                                        value="{{ old('kota') }}">
                                                    @error('kota')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="kecamatan" class="form-label">kecamatan</label>
                                                    <input type="text"
                                                        class="form-control @error('kecamatan') is-invalid @enderror"
                                                        id="kecamatan" name="kecamatan" placeholder="masukkan kecamatan"
                                                        value="{{ old('kecamatan') }}">
                                                    @error('kecamatan')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="kelurahan" class="form-label">kelurahan</label>
                                                    <input type="text"
                                                        class="form-control @error('kelurahan') is-invalid @enderror"
                                                        id="kelurahan" name="kelurahan" placeholder="masukkan kelurahan"
                                                        value="{{ old('kelurahan') }}">
                                                    @error('kelurahan')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="foto_1" class="form-label">Foto_1</label>
                                                    <input class="form-control @error('foto_1') is-invalid @enderror"
                                                        type="file" id="foto_1" name="foto_1">
                                                    @error('foto_1')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="foto_2" class="form-label">Foto_2</label>
                                                    <input class="form-control @error('foto_2') is-invalid @enderror"
                                                        type="file" id="foto_2" name="foto_2">
                                                    @error('foto_2')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="foto_3" class="form-label">Foto_3</label>
                                                    <input class="form-control @error('foto_3') is-invalid @enderror"
                                                        type="file" id="foto_3" name="foto_3">
                                                    @error('foto_3')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="deskripsi" class="form-label">deskripsi</label>
                                                    <input type="text"
                                                        class="form-control @error('deskripsi') is-invalid @enderror"
                                                        id="deskripsi" name="deskripsi" placeholder="masukkan deskripsi"
                                                        value="{{ old('deskripsi') }}">
                                                    @error('deskripsi')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="metode_penjualan"
                                                        class="form-label">metode_penjualan</label>
                                                    <select
                                                        class="form-select  @error('metode_penjualan') is-invalid @enderror"
                                                        id="metode_penjualan" name="metode_penjualan">
                                                        <option selected value="{{ old('metode_penjualan') }}">Metode
                                                            Penjualan</option>
                                                        <option value="Kilo">Kiloan</option>
                                                        <option value="Biji">Bijian</option>
                                                    </select>
                                                    @error('metode_penjualan')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror

                                                </div>
                                                <div class="mb-3">
                                                    <label for="harga" class="form-label">harga</label>
                                                    <input type="text"
                                                        class="form-control @error('harga') is-invalid @enderror"
                                                        id="harga" name="harga" placeholder="10.000"
                                                        value="{{ old('harga') }}">
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
                                                <select
                                                    class="form-select mb-3 @error('hari_kerja_mulai') is-invalid @enderror"
                                                    id="hari_kerja_mulai" name="hari_kerja_mulai">
                                                    <option selected value="{{ old('hari_kerja_mulai') }}">Mulai Hari
                                                        Kerja</option>
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
                                                <select
                                                    class="form-select mb-3 @error('hari_kerja_sampai') is-invalid @enderror"
                                                    id="hari_kerja_sampai" name="hari_kerja_sampai">
                                                    <option selected value="{{ old('hari_kerja_sampai') }}">Sampai Hari
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
                                                    <label for="jam_buka_mulai"
                                                        class="form-label">jam_buka_mulai</label>
                                                    <input type="time"
                                                        class="form-control @error('jam_buka_mulai') is-invalid @enderror"
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
                                                    <input type="time"
                                                        class="form-control @error('jam_buka_sampai') is-invalid @enderror"
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
                                                <th>Toko</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($toko->where('user_id', Auth::user()->id) as $t)
                                            <tr>
                                                <td>{{ $t->nama_toko }}</td>
                                                <td><a href="profiltoko-owner/{{ $t->id }}" type="button" class="btn btn-success"
                                                        id="profilBtn">Profil</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div id="profilToko" class="d-none">

                                    <div class="row">
                                        <div class="col col-md-4">
                                            <button id="profilTokoBack" class="btn btn-danger mb-2"><i
                                                    class="fa fa-arrow-left" aria-hidden="true"></i></button>
                                            <div class="card">
                                                <img src="/dist/img/photo1.png" class="rounded" alt="">
                                                <div class="card-body">
                                                    <form action="">
                                                        <div class="mb-3">
                                                            <label for="foto">Ganti Foto 1</label>
                                                            <input class="form-control @error('foto') is-invalid @enderror"
                                                                type="file" id="foto" name="foto">
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
                                                            <input class="form-control @error('foto') is-invalid @enderror"
                                                                type="file" id="foto" name="foto">
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
                                                            <input class="form-control @error('foto') is-invalid @enderror"
                                                                type="file" id="foto" name="foto">
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
                                                                <td>: Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit. Eum, eaque culpa. Qui, ex error illo voluptates
                                                                    nam ea inventore hic, corporis dolore quae mollitia nemo
                                                                    voluptatibus corrupti velit sapiente saepe.</td>
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
                                                                <td>: Jln. Hibrida 8 No. 13A kel. Sidomulyo Kec. Gading
                                                                    Cempaka Kota Bengkulu</td>
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

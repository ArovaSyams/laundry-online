@extends('layouts.app')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="font-weight: 500">Toko</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Toko</li>
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
                    <i class="fas fa-table mr-1"></i>
                    Data Toko
                </div>
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addUserModal">
                        Tambah Data
                    </button>
                    <div class="table-responsive">
                        <table class="table table-bordered data-user" id="dataUser" width="100%">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Foto 1</th>
                                    <th scope="col">Foto 2</th>
                                    <th scope="col">Foto 3</th>
                                    <th scope="col">Nama Toko</th>
                                    <th scope="col">Nama User</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Provinsi</th>
                                    <th scope="col">Kota</th>
                                    <th scope="col">Kecamatan</th>
                                    <th scope="col">Kelurahan</th>
                                    <th scope="col">Metode Penjualan</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Hari Kerja Mulai</th>
                                    <th scope="col">Hari Kerja Sampai</th>
                                    <th scope="col">Jam Buka Mulai</th>
                                    <th scope="col">Jam Buka Sampai</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($toko as $t)
                                    <tr>
                                        <th scope="row">{{ $t->id }}</th>
                                        <td><img src="/img/{{ $t->foto_1 }}" alt="" width="100px"></td>
                                        <td><img src="/img/{{ $t->foto_2 }}" alt="" width="100px"></td>
                                        <td><img src="/img/{{ $t->foto_3 }}" alt="" width="100px"></td>
                                        <td>{{ $t->nama_toko }}<p style="color: white">_______________________</p></td>
                                        <td>{{ $t->user->nama }}<p style="color: white">_______________________</p></td>
                                        <td>{{ $t->deskripsi }}<p style="color: white">_____________________________________________________________________</p></td>
                                        <td>{{ $t->alamat }}<p style="color: white">____________________________________________________________________</p></td>
                                        <td>{{ $t->provinsi }}</td>
                                        <td>{{ $t->kota }}</td>
                                        <td>{{ $t->kecamatan }}</td>
                                        <td>{{ $t->kelurahan }}</td>
                                        <td>{{ $t->metode_penjualan }}</td>
                                        <td>{{ $t->harga }}<p style="color: white">____________________</p></td>
                                        <td>{{ $t->hari_kerja_mulai }}</td>
                                        <td>{{ $t->hari_kerja_sampai }}</td>
                                        <td>{{ $t->jam_buka_mulai }}</td>
                                        <td>{{ $t->jam_buka_sampai }}</td>
                                        <td>
                                            <a href="/toko/{{ $t->id }}" class="btn btn-success">Edit</a>

                                            <form action="/toko/{{ $t->id }}" method="post" style="display: inline-block">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                            {{-- <a href="/toko/delete/{{ $t->id }}" class="btn btn-danger">Hapus</a> --}}
                                            <p style="color: white">____________________</p>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-2">
                        {{ $toko->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/toko" enctype="multipart/form-data">
                        @csrf
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
                        <div class="mb-3">
                            <label for="user_id" class="form-label">user_id</label>
                            <input type="text" class="form-control @error('user_id') is-invalid @enderror" id="user_id"
                                name="user_id" placeholder="masukkan user_id" value="{{ old('user_id') }}">
                            @error('user_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
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

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection

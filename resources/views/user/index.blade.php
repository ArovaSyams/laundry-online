@extends('layouts.app')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="font-weight: 500">User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User</li>
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
                    Data User
                </div>
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addUserModal">
                        Tambah Data
                    </button>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataUser" width="100%">
                            <thead class="bg-light">
                                <tr>
                                    <th style="width: 100px">id</th>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    {{-- <th>Password</th> --}}
                                    <th>Role</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    
                                    <th>Point</th>

                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $u)
                                    <tr>
                                        <th>{{ $u->id }}</th>
                                        <td><img src="/img/{{ $u->foto }}" alt="" width="100px"></td>
                                        <td>{{ $u->nama }}
                                            <p style="color: white">_________________________________</p>
                                        </td>
                                        <td>{{ $u->email }}</td>
                                        {{-- <td>{{ $u->password }}</td> --}}
                                        <td>{{ $u->role }}</td>
                                        <td>{{ $u->tanggal_lahir }}
                                            <p style="color: white">______________________</p>
                                        </td>
                                        <td>{{ $u->alamat }} 
                                            <p style="color: white">_______________________________________________________________________</p>
                                        </td>
                                       
                                        <td>{{ $u->point }}</td>

                                        <td>
                                            <a href="/user/{{ $u->id }}" class="badge bg-success">Edit</a>
                                            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editUserModal" 
                                        data-nama="{{ $u->nama }}"
                                        data-email="{{ $u->email }}"    
                                        data-password="{{ $u->password }}"    
                                        data-role="{{ $u->role }}"    
                                        data-tanggallahir="{{ $u->tanggal_lahir }}"    
                                        data-alamat="{{ $u->alamat }}"    
                                        data-provinsi="{{ $u->provinsi }}"    
                                        data-kota="{{ $u->kota }}"    
                                        data-kecamatan="{{ $u->kecamatan }}"    
                                        data-kelurahan="{{ $u->kelurahan }}"    
                                        data-point="{{ $u->point }}"    
                                        data-foto="{{ $u->foto }}"    
                                    >Edit</button> --}}

                                            <form action="/user/{{ $u->id }}" method="post"
                                                style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="badge bg-danger border-0">Hapus</button>
                                            </form>
                                            <p style="color: white">____________________</p>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-2">
                        {{ $user->links() }}
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
                    <form method="POST" action="/user" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                                name="nama" placeholder="Sriwijaya Laundry" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" placeholder="masukkan email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">password</label>
                            <input type="text" class="form-control @error('password') is-invalid @enderror" id="password"
                                name="password" placeholder="masukkan password" value="{{ old('password') }}">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">role</label>
                            <input type="text" class="form-control @error('role') is-invalid @enderror" id="role"
                                name="role" placeholder="masukkan role" value="{{ old('role') }}">
                            @error('role')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">tanggal_lahir</label>
                            <input type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                id="tanggal_lahir" name="tanggal_lahir" placeholder="masukkan tanggal_lahir"
                                value="{{ old('tanggal_lahir') }}">
                            @error('tanggal_lahir')
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
                            <label for="point" class="form-label">point</label>
                            <input type="text" class="form-control @error('point') is-invalid @enderror" id="point"
                                name="point" placeholder="masukkan point" value="{{ old('point') }}">
                            @error('point')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label for="foto" class="form-label">foto</label>
                            <input type="text" class="form-control @error('foto') is-invalid @enderror" id="foto"
                                name="foto" placeholder="masukkan foto" value="{{ old('foto') }}">
                            @error('foto')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}

                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input class="form-control @error('foto') is-invalid @enderror" type="file" id="foto" name="foto">
                            @error('foto')
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

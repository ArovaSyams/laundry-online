@extends('layouts.app')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="font-weight: 500">Order</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Order</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card ">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Data Order
                </div>
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addUserModal">
                        Tambah Data
                    </button>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Nama User</th>
                                    <th scope="col">Nama toko</th>
                                    <th scope="col">Rating</th>
                                    <th scope="col">Komentar</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($komentar as $k)
                                    <tr>
                                        <th scope="row">{{ $k->id }}</th>
                                        <td>{{ $k->user->nama }}</td>
                                        <td>{{ $k->toko->nama_toko }}</td>
                                        <td>{{ $k->rating }}</td>
                                        <td>{{ $k->komentar }}</td>

                                        <td>
                                            <a href="/komentar/{{ $k->id }}" class="btn btn-success">Edit</a>

                                            <form action="/komentar/{{ $k->id }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
                    <form method="POST" action="/komentar">
                        @csrf
                        <div class="mb-3">
                            <label for="user_id" class="form-label">user_id</label>
                            <input type="text" class="form-control @error('user_id') is-invalid @enderror" id="user_id"
                                name="user_id" placeholder="Sriwijaya Laundry" value="{{ old('user_id') }}">
                            @error('user_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="toko_id" class="form-label">toko_id</label>
                            <input type="text" class="form-control @error('toko_id') is-invalid @enderror" id="toko_id"
                                name="toko_id" placeholder="masukkan toko_id" value="{{ old('toko_id') }}">
                            @error('toko_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="rating" class="form-label">rating</label>
                            <input type="text" class="form-control @error('rating') is-invalid @enderror" id="rating"
                                name="rating" placeholder="masukkan rating" value="{{ old('rating') }}">
                            @error('rating')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="komentar" class="form-label">komentar</label>
                            <input type="text" class="form-control @error('komentar') is-invalid @enderror" id="komentar"
                                name="komentar" placeholder="masukkan komentar" value="{{ old('komentar') }}">
                            @error('komentar')
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

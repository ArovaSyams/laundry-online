@extends('layouts.app')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="font-weight: 500">Edit Komentar</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Komentar</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card ">
                <div class="card-header">
                    <i class="fas fa-edit mr-1"></i>
                    Data Komentar
                </div>
                <div class="card-body">
                    <form method="POST" action="/komentar/{{ $komentar->id }}">
                        @csrf
                        <div class="mb-3">
                            <label for="user_id" class="form-label">user_id</label>
                            <input type="text" class="form-control @error('user_id') is-invalid @enderror" id="user_id"
                                name="user_id" placeholder="{{ $komentar->user_id }}" value="{{ $komentar->user_id }}">
                            @error('user_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="toko_id" class="form-label">toko_id</label>
                            <input type="text" class="form-control @error('toko_id') is-invalid @enderror" id="toko_id"
                                name="toko_id" placeholder="{{ $komentar->toko_id }}" value="{{ $komentar->toko_id }}">
                            @error('toko_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="rating" class="form-label">rating</label>
                            <input type="text" class="form-control @error('rating') is-invalid @enderror" id="rating"
                                name="rating" placeholder="{{ $komentar->rating }}" value="{{ $komentar->rating }}">
                            @error('rating')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="komentar" class="form-label">komentar</label>
                            <input type="text" class="form-control @error('komentar') is-invalid @enderror" id="komentar"
                                name="komentar" placeholder="{{ $komentar->komentar }}"
                                value="{{ $komentar->komentar }}">
                            @error('komentar')
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
    </section>

@endsection

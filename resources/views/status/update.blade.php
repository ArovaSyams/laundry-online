@extends('layouts.app')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="font-weight: 500">Edit Status</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Status</li>
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
                    Data Order
                </div>
                <div class="card-body">
                    <form method="POST" action="/status/{{ $status->id }}">
                        @csrf
                        <div class="mb-3">
                            <label for="user_id" class="form-label">user_id</label>
                            <input type="text" class="form-control @error('user_id') is-invalid @enderror" id="user_id"
                                name="user_id" placeholder="{{ $status->user_id }}" value="{{ $status->user_id }}">
                            @error('user_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="toko_id" class="form-label">toko_id</label>
                            <input type="text" class="form-control @error('toko_id') is-invalid @enderror" id="toko_id"
                                name="toko_id" placeholder="{{ $status->toko_id }}" value="{{ $status->toko_id }}">
                            @error('toko_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <label for="status" class="form-label">Nama Status</label>
                        <select class="form-select mb-3 @error('status') is-invalid @enderror" id="status" name="status">
                            <option selected value="{{ $status->status }}">{{ $status->status }}</option>
                            <option value="Menunggu Konformasi">Menunggu Konformasi</option>
                            <option value="Dikonfirmasi">Dikonfirmasi</option>
                            <option value="Dalam Perjalanan">Dalam Perjalanan</option>
                            <option value="Pengambilan">Pengambilan</option>
                            <option value="Pencucian">Pencucian</option>
                            <option value="Jadi">Jadi</option>
                            <option value="Pengiriman ke rumah">Pengiriman ke rumah</option>
                            <option value="Penerimaan">Penerimaan</option>
                            <option value="Selesai">Selesai</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror


                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

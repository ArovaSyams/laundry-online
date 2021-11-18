@extends('layouts.app')

@section('content')
    
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0" style="font-weight: 500">Edit Order</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Order</li>
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
                        <form method="POST" action="/order/{{ $order->id }}">
                            @csrf
                            <div class="mb-3">
                                <label for="user_id" class="form-label">user_id</label>
                                <input type="text" class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id" placeholder="{{ $order->user_id }}" value="{{ $order->user_id }}">
                                @error('user_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="toko_id" class="form-label">toko_id</label>
                                <input type="text" class="form-control @error('toko_id') is-invalid @enderror" id="toko_id" name="toko_id" placeholder="{{ $order->toko_id }}" value="{{ $order->toko_id }}">
                                @error('toko_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="{{ $order->alamat }}" value="{{ $order->alamat }}">
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="provinsi" class="form-label">provinsi</label>
                                <input type="text" class="form-control @error('provinsi') is-invalid @enderror" id="provinsi" name="provinsi" placeholder="{{ $order->provinsi }}" value="{{ $order->provinsi }}">
                                @error('provinsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="kota" class="form-label">kota</label>
                                <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota" name="kota" placeholder="{{ $order->kota }}" value="{{ $order->kota }}">
                                @error('kota')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="kecamatan" class="form-label">kecamatan</label>
                                <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan" name="kecamatan" placeholder="{{ $order->kecamatan }}" value="{{ $order->kecamatan }}">
                                @error('kecamatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="kelurahan" class="form-label">kelurahan</label>
                                <input type="text" class="form-control @error('kelurahan') is-invalid @enderror" id="kelurahan" name="kelurahan" placeholder="{{ $order->kelurahan }}" value="{{ $order->kelurahan }}">
                                @error('kelurahan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jumlah_qty" class="form-label">jumlah_qty</label>
                                <input type="text" class="form-control @error('jumlah_qty') is-invalid @enderror" id="jumlah_qty" name="jumlah_qty" placeholder="{{ $order->jumlah_qty }}" value="{{ $order->jumlah_qty }}">
                                @error('jumlah_qty')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="total" class="form-label">total</label>
                                <input type="text" class="form-control @error('total') is-invalid @enderror" id="total" name="total" placeholder="{{ $order->total }}" value="{{ $order->total }}">
                                @error('total')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="waktu_pengambilan" class="form-label">waktu_pengambilan</label>
                                <input type="time" class="form-control @error('waktu_pengambilan') is-invalid @enderror" id="waktu_pengambilan" name="waktu_pengambilan" placeholder="{{ $order->waktu_pengambilan }}" value="{{ $order->waktu_pengambilan }}">
                                @error('waktu_pengambilan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_pemesanan" class="form-label">tanggal_pemesanan</label>
                                <input type="date" class="form-control @error('tanggal_pemesanan') is-invalid @enderror" id="tanggal_pemesanan" name="tanggal_pemesanan" placeholder="masukkan tanggal_pemesanan" value="{{ $order->tanggal_pemesanan }}">
                                @error('tanggal_pemesanan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_jadi" class="form-label">tanggal_jadi</label>
                                <input type="date" class="form-control @error('tanggal_jadi') is-invalid @enderror" id="tanggal_jadi" name="tanggal_jadi" placeholder="masukkan tanggal_jadi" value="{{ $order->tanggal_jadi }}">
                                @error('tanggal_jadi')
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
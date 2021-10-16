<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Update Order</title>
</head>
<body>
    <div class="container">
        <div class="col">
            <div class="row">

                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="card-title">UPDATE DATA</h3>
                        <hr>
                        <form method="POST" action="/order/{{ $order->id }}">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_user" class="form-label">nama_user</label>
                                <input type="text" class="form-control @error('nama_user') is-invalid @enderror" id="nama_user" name="nama_user" placeholder="{{ $order->nama_user }}" value="{{ $order->nama_user }}">
                                @error('nama_user')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nama_toko" class="form-label">nama_toko</label>
                                <input type="text" class="form-control @error('nama_toko') is-invalid @enderror" id="nama_toko" name="nama_toko" placeholder="{{ $order->nama_toko }}" value="{{ $order->nama_toko }}">
                                @error('nama_toko')
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
        </div>
    </div>

</body>
</html>
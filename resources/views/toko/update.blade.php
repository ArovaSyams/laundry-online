<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Toko Updata</title>
</head>
<body>
    <div class="container">
        <div class="col">
            <div class="row">

                
                
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="card-title">UPDATE DATA</h3>
                        <hr>
                        <form method="POST" action="/toko/{{ $toko->id }}">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_toko" class="form-label">Nama Toko</label>
                                <input type="text" class="form-control" id="nama_toko" name="nama_toko" placeholder="{{ $toko->nama_toko }}" value="{{ $toko->nama_toko }}">
                            </div>
                            <div class="mb-3">
                                <label for="nama_pemilik" class="form-label">nama_pemilik</label>
                                <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" placeholder="{{ $toko->nama_pemilik }}" value="{{ $toko->nama_pemilik }}">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="{{ $toko->alamat }}" value="{{ $toko->alamat }}">
                            </div>
                            <div class="mb-3">
                                <label for="provinsi" class="form-label">provinsi</label>
                                <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="{{ $toko->provinsi }}" value="{{ $toko->provinsi }}">
                            </div>
                            <div class="mb-3">
                                <label for="kota" class="form-label">kota</label>
                                <input type="text" class="form-control" id="kota" name="kota" placeholder="{{ $toko->kota }}" value="{{ $toko->kota }}">
                            </div>
                            <div class="mb-3">
                                <label for="kecamatan" class="form-label">kecamatan</label>
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="{{ $toko->kecamatan }}" value="{{ $toko->kecamatan }}">
                            </div>
                            <div class="mb-3">
                                <label for="kelurahan" class="form-label">kelurahan</label>
                                <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="{{ $toko->kelurahan }}" value="{{ $toko->kelurahan }}">
                            </div>
                            <div class="mb-3">
                                <label for="foto_1" class="form-label">foto_1</label>
                                <input type="text" class="form-control" id="foto_1" name="foto_1" placeholder="{{ $toko->foto_1 }}" value="{{ $toko->foto_1 }}">
                            </div>
                            <div class="mb-3">
                                <label for="foto_2" class="form-label">foto_2</label>
                                <input type="text" class="form-control" id="foto_2" name="foto_2" placeholder="{{ $toko->foto_2 }}" value="{{ $toko->foto_2 }}">
                            </div>
                            <div class="mb-3">
                                <label for="foto_3" class="form-label">foto_3</label>
                                <input type="text" class="form-control" id="foto_3" name="foto_3" placeholder="{{ $toko->foto_3 }}" value="{{ $toko->foto_3 }}">
                            </div>
                            <div class="mb-3">
                                <label for="metode_penjualan" class="form-label">metode_penjualan</label>
                                <input type="text" class="form-control" id="metode_penjualan" name="metode_penjualan" placeholder="{{ $toko->metode_penjualan }}" value="{{ $toko->metode_penjualan }}">
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">harga</label>
                                <input type="text" class="form-control" id="harga" name="harga" placeholder="{{ $toko->harga }}" value="{{ $toko->harga }}">
                            </div>
                            <div class="mb-3">
                                <label for="hari_kerja" class="form-label">hari_kerja</label>
                                <input type="text" class="form-control" id="hari_kerja" name="hari_kerja" placeholder="{{ $toko->hari_kerja }}" value="{{ $toko->hari_kerja }}">
                            </div>
                            <div class="mb-3">
                                <label for="jam_buka" class="form-label">jam_buka</label>
                                <input type="text" class="form-control" id="jam_buka" name="jam_buka" placeholder="{{ $toko->jam_buka }}" value="{{ $toko->jam_buka }}">
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
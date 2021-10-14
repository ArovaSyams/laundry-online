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
                                <label for="deskripsi" class="form-label">deskripsi</label>
                                <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" placeholder="masukkan deskripsi" value="{{ $toko->deskripsi }}">
                                @error('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="metode_penjualan" class="form-label">metode_penjualan</label>
                                <select class="form-select  @error('metode_penjualan') is-invalid @enderror" id="metode_penjualan" name="metode_penjualan">
                                    <option selected value="{{ $toko->metode_penjualan }}">{{ $toko->metode_penjualan }}</option>
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
                                <input type="text" class="form-control" id="harga" name="harga" placeholder="{{ $toko->harga }}" value="{{ $toko->harga }}">
                            </div>
                            <label for="hari_kerja_mulai" class="form-label">hari_kerja</label>
                            <select class="form-select mb-3 @error('hari_kerja_mulai') is-invalid @enderror" id="hari_kerja_mulai" name="hari_kerja_mulai">
                                <option selected value="{{ $toko->hari_kerja_mulai }}">{{ $toko->hari_kerja_mulai }}</option>
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
                            <select class="form-select mb-3 @error('hari_kerja_sampai') is-invalid @enderror" id="hari_kerja_sampai" name="hari_kerja_sampai">
                                <option selected value="{{ $toko->hari_kerja_sampai }}">{{ $toko->hari_kerja_sampai }}</option>
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
                                <label for="jam_buka_mulai" class="form-label">jam_tutup</label>
                                <input type="text" class="form-control @error('jam_buka_mulai') is-invalid @enderror" id="jam_buka_mulai" name="jam_buka_mulai" placeholder="07:00 WIB" value="{{ $toko->jam_buka_mulai }}">
                                @error('jam_buka_mulai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jam_buka_sampai" class="form-label">jam_buka_sampai</label>
                                <input type="text" class="form-control @error('jam_buka_sampai') is-invalid @enderror" id="jam_buka_sampai" name="jam_buka_sampai" placeholder="18:00 WIB" value="{{ $toko->jam_buka_sampai }}">
                                @error('jam_buka_sampai')
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
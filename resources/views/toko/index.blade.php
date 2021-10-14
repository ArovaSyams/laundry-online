<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Toko CRUD</title>
</head>
<body>
    <div class="container">
        <div class="col">
            <div class="row">
                <h1 class="mt-5">CRUD Toko</h1>

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead class="bg-light">
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nama Toko</th>
                            <th scope="col">Nama Pemilik</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Provinsi</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Kecamatan</th>
                            <th scope="col">Kelurahan</th>
                            <th scope="col">Foto 1</th>
                            <th scope="col">Foto 2</th>
                            <th scope="col">Foto 3</th>
                            <th scope="col">Metode Penjualan</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Hari Kerja</th>
                            <th scope="col">Jam Buka</th>
                            <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($toko as $t)
                        <tr>
                          <th scope="row">{{ $t->id }}</th>
                          <td>{{ $t->nama_toko }}</td>
                          <td>{{ $t->nama_pemilik }}</td>
                          <td>{{ $t->alamat }}</td>
                          <td>{{ $t->provinsi }}</td>
                          <td>{{ $t->kota }}</td>
                          <td>{{ $t->kecamatan }}</td>
                          <td>{{ $t->kelurahan }}</td>
                          <td>{{ $t->foto_1 }}</td>
                          <td>{{ $t->foto_2 }}</td>
                          <td>{{ $t->foto_3 }}</td>
                          <td>{{ $t->metode_penjualan }}</td>
                          <td>{{ $t->harga }}</td>
                          <td>{{ $t->hari_kerja }}</td>
                          <td>{{ $t->jam_buka }}</td>
                          <td>
                                <a href="/toko/{{ $t->id }}" class="btn btn-success">Edit</a>

                                <form action="/toko/{{ $t->id }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                {{-- <a href="/toko/delete/{{ $t->id }}" class="btn btn-danger">Hapus</a> --}}
                                
                           </td>
                        </tr>
                        @endforeach                 
                    </tbody>
                </table>
            </div>
                
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="card-title">TAMBAH DATA</h3>
                        <hr>
                        <form method="POST" action="/toko">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_toko" class="form-label">Nama Toko</label>
                                <input type="text" class="form-control" id="nama_toko" name="nama_toko" placeholder="Sriwijaya Laundry">
                            </div>
                            <div class="mb-3">
                                <label for="nama_pemilik" class="form-label">nama_pemilik</label>
                                <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" placeholder="masukkan nama_pemilik">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="masukkan alamat">
                            </div>
                            <div class="mb-3">
                                <label for="provinsi" class="form-label">provinsi</label>
                                <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="masukkan provinsi">
                            </div>
                            <div class="mb-3">
                                <label for="kota" class="form-label">kota</label>
                                <input type="text" class="form-control" id="kota" name="kota" placeholder="masukkan kota">
                            </div>
                            <div class="mb-3">
                                <label for="kecamatan" class="form-label">kecamatan</label>
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="masukkan kecamatan">
                            </div>
                            <div class="mb-3">
                                <label for="kelurahan" class="form-label">kelurahan</label>
                                <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="masukkan kelurahan">
                            </div>
                            <div class="mb-3">
                                <label for="foto_1" class="form-label">foto_1</label>
                                <input type="text" class="form-control" id="foto_1" name="foto_1" placeholder="masukkan foto_1">
                            </div>
                            <div class="mb-3">
                                <label for="foto_1" class="form-label">Foto 1</label>
                                <input class="form-control" type="file" id="foto_1" name="foto_1">
                              </div>
                            <div class="mb-3">
                                <label for="foto_2" class="form-label">foto_2</label>
                                <input type="text" class="form-control" id="foto_2" name="foto_2" placeholder="masukkan foto_2">
                            </div>
                            <div class="mb-3">
                                <label for="foto_3" class="form-label">foto_3</label>
                                <input type="text" class="form-control" id="foto_3" name="foto_3" placeholder="masukkan foto_3">
                            </div>
                            {{-- <div class="mb-3">
                                <label for="metode_penjualan" class="form-label">metode_penjualan</label>
                                <input type="text" class="form-control" id="metode_penjualan" name="metode_penjualan" placeholder="masukkan metode_penjualan">
                            </div> --}}
                            <label for="metode_penjualan" class="form-label">metode_penjualan</label>
                            <select class="form-select mb-3" id="metode_penjualan" name="metode_penjualan">
                                <option selected>Metode Penjualan</option>
                                <option value="Kiloan">Kiloan</option>
                                <option value="Bijian">Bijian</option>
                            </select>
                            <div class="mb-3">
                                <label for="harga" class="form-label">harga</label>
                                <input type="text" class="form-control" id="harga" name="harga" placeholder="10.000 Per Biji">
                            </div>
                            {{-- <div class="mb-3">
                                <input type="text" class="form-control" id="hari_kerja_mulai" name="hari_kerja_mulai" placeholder="masukkan hari_kerja_mulai">
                            </div> --}}
                            <label for="hari_kerja_mulai" class="form-label">hari_kerja</label>
                            <select class="form-select mb-3" id="hari_kerja_mulai" name="hari_kerja_mulai">
                                <option selected>Mulai Hari Kerja</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jum'at">Jum'at</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                            {{-- <div class="mb-3">
                                <label for="hari_kerja_sampai" class="form-label">hari_kerja_sampai</label>
                                <input type="text" class="form-control" id="hari_kerja_sampai" name="hari_kerja_sampai" placeholder="masukkan hari_kerja_sampai">
                            </div> --}}
                            <select class="form-select mb-3" id="hari_kerja_sampai" name="hari_kerja_sampai">
                                <option selected>Sampai Hari</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jum'at">Jum'at</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                            <div class="mb-3">
                                <label for="jam_buka_mulai" class="form-label">jam_buka_mulai</label>
                                <input type="text" class="form-control" id="jam_buka_mulai" name="jam_buka_mulai" placeholder="07:00 WIB">
                            </div>
                            <div class="mb-3">
                                <label for="jam_buka_sampai" class="form-label">jam_buka_sampai</label>
                                <input type="text" class="form-control" id="jam_buka_sampai" name="jam_buka_sampai" placeholder="18:00 WIB">
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
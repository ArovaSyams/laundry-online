<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Order CRUD</title>
</head>
<body>
    <div class="container">
        <div class="col">
            <div class="row">
                <h1 class="mt-5">CRUD Order</h1>

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead class="bg-light">
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nama User</th>
                            <th scope="col">Nama toko</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Provinsi</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Kecamatan</th>
                            <th scope="col">Kelurahan</th>
                            <th scope="col">Jumlah QTY</th>
                            <th scope="col">Total</th>
                            <th scope="col">waktu Pengambilan</th>
                            <th scope="col" >Tanggal Pemesanan</th>
                            <th scope="col">Tanggal Jadi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($order as $o)
                        <tr>
                          <th scope="row">{{ $o->id }}</th>
                          <td>{{ $o->nama_user }}</td>
                          <td>{{ $o->nama_toko }}</td>
                          <td>{{ $o->alamat }}</td>
                          <td>{{ $o->provinsi }}</td>
                          <td>{{ $o->kota }}</td>
                          <td>{{ $o->kecamatan }}</td>
                          <td>{{ $o->kelurahan }}</td>
                          <td>{{ $o->jumlah_qty }}</td>
                          <td>{{ $o->total }}</td>
                          <td>{{ $o->waktu_pengambilan }}</td>
                          <td>{{ $o->tanggal_pemesanan }}</td>
                          <td>{{ $o->tanggal_jadi }}</td>
                          <td>
                                <a href="/order/{{ $o->id }}" class="btn btn-success">Edit</a>

                                <form action="/order/{{ $o->id }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                
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
                        <form method="POST" action="/order">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_user" class="form-label">nama_user</label>
                                <input type="text" class="form-control @error('nama_user') is-invalid @enderror" id="nama_user" name="nama_user" placeholder="Sriwijaya Laundry" value="{{ old('nama_user') }}">
                                @error('nama_user')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nama_toko" class="form-label">nama_toko</label>
                                <input type="text" class="form-control @error('nama_toko') is-invalid @enderror" id="nama_toko" name="nama_toko" placeholder="masukkan nama_toko" value="{{ old('nama_toko') }}">
                                @error('nama_toko')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="masukkan alamat" value="{{ old('alamat') }}">
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="provinsi" class="form-label">provinsi</label>
                                <input type="text" class="form-control @error('provinsi') is-invalid @enderror" id="provinsi" name="provinsi" placeholder="masukkan provinsi" value="{{ old('provinsi') }}">
                                @error('provinsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="kota" class="form-label">kota</label>
                                <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota" name="kota" placeholder="masukkan kota" value="{{ old('kota') }}">
                                @error('kota')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="kecamatan" class="form-label">kecamatan</label>
                                <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan" name="kecamatan" placeholder="masukkan kecamatan" value="{{ old('kecamatan') }}">
                                @error('kecamatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="kelurahan" class="form-label">kelurahan</label>
                                <input type="text" class="form-control @error('kelurahan') is-invalid @enderror" id="kelurahan" name="kelurahan" placeholder="masukkan kelurahan" value="{{ old('kelurahan') }}">
                                @error('kelurahan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jumlah_qty" class="form-label">jumlah_qty</label>
                                <input type="text" class="form-control @error('jumlah_qty') is-invalid @enderror" id="jumlah_qty" name="jumlah_qty" placeholder="masukkan jumlah_qty" value="{{ old('jumlah_qty') }}">
                                @error('jumlah_qty')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- <div class="mb-3">
                                <label for="foto_1" class="form-label">Foto 1</label>
                                <input class="form-control" type="file" id="foto_1" name="foto_1">
                              </div> --}}
                            <div class="mb-3">
                                <label for="total" class="form-label">total</label>
                                <input type="text" class="form-control @error('total') is-invalid @enderror" id="total" name="total" placeholder="masukkan total" value="{{ old('total') }}">
                                @error('total')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="waktu_pengambilan" class="form-label">waktu_pengambilan</label>
                                <input type="time" class="form-control @error('waktu_pengambilan') is-invalid @enderror" id="waktu_pengambilan" name="waktu_pengambilan" placeholder="masukkan waktu_pengambilan" value="{{ old('waktu_pengambilan') }}">
                                @error('waktu_pengambilan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_pemesanan" class="form-label">tanggal_pemesanan</label>
                                <input type="date" class="form-control @error('tanggal_pemesanan') is-invalid @enderror" id="tanggal_pemesanan" name="tanggal_pemesanan" placeholder="masukkan tanggal_pemesanan" value="{{ old('tanggal_pemesanan') }}">
                                @error('tanggal_pemesanan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_jadi" class="form-label">tanggal_jadi</label>
                                <input type="date" class="form-control @error('tanggal_jadi') is-invalid @enderror" id="tanggal_jadi" name="tanggal_jadi" placeholder="masukkan tanggal_jadi" value="{{ old('tanggal_jadi') }}">
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

{{-- <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>User CRUD</title>
</head>
<body>
    <div class="container">
        <div class="col">
            <div class="row">
                <h1 class="mt-5">CRUD User</h1>

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead class="bg-light">
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Role</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Provinsi</th>
                            <th scope="col">kota</th>
                            <th scope="col">Kecamatan</th>
                            <th scope="col">Kelurahan</th>
                            <th scope="col">Point</th>
                            <th scope="col">Foto</th>
                            
                            <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($user as $u)
                        <tr>
                          <th scope="row">{{ $u->id }}</th>
                          <td>{{ $u->nama }}</td>
                          <td>{{ $u->email }}</td>
                          <td>{{ $u->password }}</td>
                          <td>{{ $u->role }}</td>
                          <td>{{ $u->tanggal_lahir }}</td>
                          <td>{{ $u->alamat }}</td>
                          <td>{{ $u->provinsi }}</td>
                          <td>{{ $u->kota }}</td>
                          <td>{{ $u->kecamatan }}</td>
                          <td>{{ $u->kelurahan }}</td>
                          <td>{{ $u->point }}</td>
                          <td>{{ $u->foto }}</td>
                          
                          <td>
                                <a href="/user/{{ $u->id }}" class="btn btn-success">Edit</a>

                                <form action="/user/{{ $u->id }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                {{-- <a href="/toko/delete/{{ $u->id }}" class="btn btn-danger">Hapus</a> --}}
                                
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
                        <form method="POST" action="/user">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Sriwijaya Laundry" value="{{ old('nama') }}">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="masukkan email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">password</label>
                                <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="masukkan password" value="{{ old('password') }}">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">role</label>
                                <input type="text" class="form-control @error('role') is-invalid @enderror" id="role" name="role" placeholder="masukkan role" value="{{ old('role') }}">
                                @error('role')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">tanggal_lahir</label>
                                <input type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" placeholder="masukkan tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                                @error('tanggal_lahir')
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
                                <label for="point" class="form-label">point</label>
                                <input type="text" class="form-control @error('point') is-invalid @enderror" id="point" name="point" placeholder="masukkan point" value="{{ old('point') }}">
                                @error('point')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">foto</label>
                                <input type="text" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto" placeholder="masukkan foto" value="{{ old('foto') }}">
                                @error('foto')
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
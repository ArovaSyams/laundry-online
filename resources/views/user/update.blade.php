<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>User Update</title>
</head>
<body>
    <div class="container">
        <div class="col">
            <div class="row">

                
                
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="card-title">UPDATE DATA</h3>
                        <hr>
                        <form method="POST" action="/user/{{ $user->id }}">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="{{ $user->nama }}" value="{{ $user->nama }}">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="{{ $user->email }}" value="{{ $user->email }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">password</label>
                                <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="{{ $user->password }}" value="{{ $user->password }}">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">role</label>
                                <input type="text" class="form-control @error('role') is-invalid @enderror" id="role" name="role" placeholder="{{ $user->role }}" value="{{ $user->role }}">
                                @error('role')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">tanggal_lahir</label>
                                <input type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" placeholder="{{ $user->tanggal_lahir }}" value="{{ $user->tanggal_lahir }}">
                                @error('tanggal_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="{{ $user->alamat }}" value="{{ $user->alamat }}">
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="provinsi" class="form-label">provinsi</label>
                                <input type="text" class="form-control @error('provinsi') is-invalid @enderror" id="provinsi" name="provinsi" placeholder="{{ $user->provinsi }}" value="{{ $user->provinsi }}">
                                @error('provinsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="kota" class="form-label">kota</label>
                                <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota" name="kota" placeholder="{{ $user->kota }}" value="{{ $user->kota }}">
                                @error('kota')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="kecamatan" class="form-label">kecamatan</label>
                                <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan" name="kecamatan" placeholder="{{ $user->kecamatan }}" value="{{ $user->kecamatan }}">
                                @error('kecamatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="kelurahan" class="form-label">kelurahan</label>
                                <input type="text" class="form-control @error('kelurahan') is-invalid @enderror" id="kelurahan" name="kelurahan" placeholder="{{ $user->kelurahan }}" value="{{ $user->kelurahan }}">
                                @error('kelurahan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="point" class="form-label">point</label>
                                <input type="text" class="form-control @error('point') is-invalid @enderror" id="point" name="point" placeholder="masukkan point" value="{{ $user->point }}">
                                @error('point')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">foto</label>
                                <input type="text" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto" placeholder="masukkan foto" value="{{ $user->foto }}">
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
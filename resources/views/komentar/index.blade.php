<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Komentar CRUD</title>
</head>
<body>
    <div class="container">
        <div class="col">
            <div class="row">
                <h1 class="mt-5">CRUD Komentar</h1>

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead class="bg-light">
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nama User</th>
                            <th scope="col">Nama toko</th>
                            <th scope="col">Komentar</th>
                            
                            <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($komentar as $k)
                        <tr>
                          <th scope="row">{{ $k->id }}</th>
                          <td>{{ $k->nama_user }}</td>
                          <td>{{ $k->nama_toko }}</td>
                          <td>{{ $k->komentar }}</td>
                          
                          <td>
                                <a href="/komentar/{{ $k->id }}" class="btn btn-success">Edit</a>

                                <form action="/komentar/{{ $k->id }}" method="post">
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
                        <form method="POST" action="/komentar">
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
                                <label for="komentar" class="form-label">komentar</label>
                                <input type="text" class="form-control @error('komentar') is-invalid @enderror" id="komentar" name="komentar" placeholder="masukkan komentar" value="{{ old('komentar') }}">
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
        </div>
    </div>
</body>
</html>
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
                          <td>{{ $k->user_id }}</td>
                          <td>{{ $k->toko_id }}</td>
                          <td>{{ $k->rating }}</td>
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
                                <label for="user_id" class="form-label">user_id</label>
                                <input type="text" class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id" placeholder="Sriwijaya Laundry" value="{{ old('user_id') }}">
                                @error('user_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="toko_id" class="form-label">toko_id</label>
                                <input type="text" class="form-control @error('toko_id') is-invalid @enderror" id="toko_id" name="toko_id" placeholder="masukkan toko_id" value="{{ old('toko_id') }}">
                                @error('toko_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="rating" class="form-label">rating</label>
                                <input type="text" class="form-control @error('rating') is-invalid @enderror" id="rating" name="rating" placeholder="masukkan rating" value="{{ old('rating') }}">
                                @error('rating')
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

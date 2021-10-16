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
                <h1 class="mt-5">CRUD Status</h1>

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead class="bg-light">
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nama User</th>
                            <th scope="col">Nama toko</th>
                            <th scope="col">Nama_status</th>
                            
                            <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($status as $s)
                        <tr>
                          <th scope="row">{{ $s->id }}</th>
                          <td>{{ $s->nama_user }}</td>
                          <td>{{ $s->nama_toko }}</td>
                          <td>{{ $s->status }}</td>
                          
                          <td>
                                <a href="/status/{{ $s->id }}" class="btn btn-success">Edit</a>

                                <form action="/status/{{ $s->id }}" method="post">
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
                        <form method="POST" action="/status">
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
                            <label for="status" class="form-label">Nama Status</label>
                            <select class="form-select mb-3 @error('status') is-invalid @enderror" id="status" name="status">
                                <option selected value="{{ old('status') }}">Status</option>
                                <option value="Menunggu Konformasi">Menunggu Konformasi</option>
                                <option value="Dikonfirmasi">Dikonfirmasi</option>
                                <option value="Dalam Perjalanan">Dalam Perjalanan</option>
                                <option value="Pengambilan">Pengambilan</option>
                                <option value="Pencucian">Pencucian</option>
                                <option value="Jadi">Jadi</option>
                                <option value="Pengiriman ke rumah">Pengiriman ke rumah</option>
                                <option value="Penerimaan">Penerimaan</option>
                                <option value="Selesai">Selesai</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                  </div>

            </div>
        </div>
    </div>
</body>
</html>

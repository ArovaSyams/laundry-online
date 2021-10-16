<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Update Status</title>
</head>
<body>
    <div class="container">
        <div class="col">
            <div class="row">

                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="card-title">UPDATE DATA</h3>
                        <hr>
                        <form method="POST" action="/status/{{ $status->id }}">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_user" class="form-label">nama_user</label>
                                <input type="text" class="form-control @error('nama_user') is-invalid @enderror" id="nama_user" name="nama_user" placeholder="{{ $status->nama_user }}" value="{{ $status->nama_user }}">
                                @error('nama_user')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nama_toko" class="form-label">nama_toko</label>
                                <input type="text" class="form-control @error('nama_toko') is-invalid @enderror" id="nama_toko" name="nama_toko" placeholder="{{ $status->nama_toko }}" value="{{ $status->nama_toko }}">
                                @error('nama_toko')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <label for="status" class="form-label">Nama Status</label>
                            <select class="form-select mb-3 @error('status') is-invalid @enderror" id="status" name="status">
                                <option selected value="{{ $status->status }}">{{ $status->status }}</option>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Update Komentar</title>
</head>
<body>
    <div class="container">
        <div class="col">
            <div class="row">

                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="card-title">UPDATE DATA</h3>
                        <hr>
                        <form method="POST" action="/komentar/{{ $komentar->id }}">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_user" class="form-label">nama_user</label>
                                <input type="text" class="form-control @error('nama_user') is-invalid @enderror" id="nama_user" name="nama_user" placeholder="{{ $komentar->nama_user }}" value="{{ $komentar->nama_user }}">
                                @error('nama_user')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nama_toko" class="form-label">nama_toko</label>
                                <input type="text" class="form-control @error('nama_toko') is-invalid @enderror" id="nama_toko" name="nama_toko" placeholder="{{ $komentar->nama_toko }}" value="{{ $komentar->nama_toko }}">
                                @error('nama_toko')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="komentar" class="form-label">komentar</label>
                                <input type="text" class="form-control @error('komentar') is-invalid @enderror" id="komentar" name="komentar" placeholder="{{ $komentar->komentar }}" value="{{ $komentar->komentar }}">
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
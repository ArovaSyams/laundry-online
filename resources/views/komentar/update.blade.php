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
                                <label for="user_id" class="form-label">user_id</label>
                                <input type="text" class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id" placeholder="{{ $komentar->user_id }}" value="{{ $komentar->user_id }}">
                                @error('user_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="toko_id" class="form-label">toko_id</label>
                                <input type="text" class="form-control @error('toko_id') is-invalid @enderror" id="toko_id" name="toko_id" placeholder="{{ $komentar->toko_id }}" value="{{ $komentar->toko_id }}">
                                @error('toko_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="rating" class="form-label">rating</label>
                                <input type="text" class="form-control @error('rating') is-invalid @enderror" id="rating" name="rating" placeholder="{{ $komentar->rating }}" value="{{ $komentar->rating }}">
                                @error('rating')
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
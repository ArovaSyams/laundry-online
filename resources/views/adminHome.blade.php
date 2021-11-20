@extends('layouts.app')

@section('content')
    {{-- <div class="container"> --}}
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> --}}

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="font-weight: 500">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">

            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-light">
                        <div class="inner">
                            <h3>{{ $userc }}</h3>

                            <p>User</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <a href="user" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-light">
                        <div class="inner">
                            <h3>{{ $tokoc }}</h3>

                            <p>Toko</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-store"></i>
                        </div>
                        <a href="/toko" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-light">
                        <div class="inner">
                            <h3>{{ $orderc }}</h3>

                            <p>Order</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <a href="/toko" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-light">
                        <div class="inner">
                            <h3>{{ $statusc }}</h3>

                            <p>Status</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <a href="/status" class="small-box-footer">Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->

            <div class="card ">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Data User Terbaru
                </div>
                <div class="card-body">
                    <a href="/user" class="btn btn-primary mb-3">Selengkapnya</a>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataUser" width="100%">
                            <thead class="bg-light">
                                <tr>
                                    <th style="width: 100px">id</th>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    {{-- <th>Password</th> --}}
                                    {{-- <th>Role</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>Provinsi</th>
                                    <th>kota</th>
                                    <th>Kecamatan</th>
                                    <th>Kelurahan</th>
                                    <th>Point</th>
                                    <th>Point</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $u)
                                    <tr>
                                        <th>{{ $u->id }}</th>
                                        <td><img src="/img/{{ $u->foto }}" class="img-circle elevation-2" alt="" width="100px" height="100px"></td>
                                        <td>{{ $u->nama }}
                                            <p style="color: white">_________________________________</p>
                                        </td>
                                        <td>{{ $u->email }}</td>
                                        {{-- <td>{{ $u->password }}</td> --}}
                                        {{-- <td>{{ $u->role }}</td>
                                        <td>{{ $u->tanggal_lahir }}
                                            <p style="color: white">______________________</p>
                                        </td>
                                        <td>{{ $u->alamat }}
                                            <p style="color: white">
                                                _______________________________________________________________________</p>
                                        </td>
                                        <td>{{ $u->provinsi }}</td>
                                        <td>{{ $u->kota }}</td>
                                        <td>{{ $u->kecamatan }}</td>
                                        <td>{{ $u->kelurahan }}</td>
                                        <td>{{ $u->point }}</td>
                                        <td>{{ $u->created_at }}</td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card ">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Data Toko Terbaru
                </div>
                <div class="card-body">
                    <a href="/toko" class="btn btn-primary mb-3">Selengkapnya</a>
                    <div class="table-responsive">
                        <table class="table table-bordered data-user" id="dataUser" width="100%">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Foto 1</th>
                                    <th scope="col">Foto 2</th>
                                    <th scope="col">Foto 3</th>
                                    <th scope="col">Nama Toko</th>
                                    <th scope="col">Nama Owner</th>
                                    {{-- <th scope="col">Deskripsi</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Provinsi</th>
                                    <th scope="col">Kota</th>
                                    <th scope="col">Kecamatan</th>
                                    <th scope="col">Kelurahan</th>
                                    <th scope="col">Metode Penjualan</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Hari Kerja Mulai</th>
                                    <th scope="col">Hari Kerja Sampai</th>
                                    <th scope="col">Jam Buka Mulai</th>
                                    <th scope="col">Jam Buka Sampai</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($toko as $t)
                                    <tr>
                                        <th scope="row">{{ $t->id }}</th>
                                        <td><img src="/img/{{ $t->foto_1 }}" alt="" width="100px"></td>
                                        <td><img src="/img/{{ $t->foto_2 }}" alt="" width="100px"></td>
                                        <td><img src="/img/{{ $t->foto_3 }}" alt="" width="100px"></td>
                                        <td>{{ $t->nama_toko }}<p style="color: white">_______________________</p>
                                        </td>
                                        <td>{{ $t->user->nama }}<p style="color: white">_______________________</p>
                                        </td>
                                        {{-- <td>{{ $t->deskripsi }}<p style="color: white">
                                                _____________________________________________________________________</p>
                                        </td>
                                        <td>{{ $t->alamat }}<p style="color: white">
                                                ____________________________________________________________________</p>
                                        </td>
                                        <td>{{ $t->provinsi }}</td>
                                        <td>{{ $t->kota }}</td>
                                        <td>{{ $t->kecamatan }}</td>
                                        <td>{{ $t->kelurahan }}</td>
                                        <td>{{ $t->metode_penjualan }}</td>
                                        <td>{{ $t->harga }}<p style="color: white">____________________</p>
                                        </td>
                                        <td>{{ $t->hari_kerja_mulai }}</td>
                                        <td>{{ $t->hari_kerja_sampai }}</td>
                                        <td>{{ $t->jam_buka_mulai }}</td>
                                        <td>{{ $t->jam_buka_sampai }}</td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card ">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Data Order Terbaru
                </div>
                <div class="card-body">
                    <a href="/order" class="btn btn-primary mb-3">Selengkapnya</a>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Nama User</th>
                                    <th scope="col">Nama toko</th>
                                    {{-- <th scope="col">Alamat</th>
                                    <th scope="col">Provinsi</th>
                                    <th scope="col">Kota</th>
                                    <th scope="col">Kecamatan</th>
                                    <th scope="col">Kelurahan</th>
                                    <th scope="col">Jumlah QTY</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">waktu Pengambilan</th>
                                    <th scope="col">Tanggal Pemesanan</th>
                                    <th scope="col">Tanggal Jadi</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $o)
                                    <tr>
                                        <th scope="row">{{ $o->id }}</th>
                                        <td>{{ $o->user->nama }}</td>
                                        <td>{{ $o->toko->nama_toko }}</td>
                                        {{-- <td>{{ $o->alamat }}</td>
                                        <td>{{ $o->provinsi }}</td>
                                        <td>{{ $o->kota }}</td>
                                        <td>{{ $o->kecamatan }}</td>
                                        <td>{{ $o->kelurahan }}</td>
                                        <td>{{ $o->jumlah_qty }}</td>
                                        <td>{{ $o->total }}</td>
                                        <td>{{ $o->waktu_pengambilan }}</td>
                                        <td>{{ $o->tanggal_pemesanan }}</td>
                                        <td>{{ $o->tanggal_jadi }}</td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card ">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Data Status Terbaru
                </div>
                <div class="card-body">
                    <a href="/status" class="btn btn-primary mb-3">Selengkapnya</a>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Nama User</th>
                                    <th scope="col">Nama toko</th>
                                    <th scope="col">Nama_status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($status as $s)
                                    <tr>
                                        <th scope="row">{{ $s->id }}</th>
                                        <td>{{ $s->user->nama }}</td>
                                        <td>{{ $s->toko->nama_toko }}</td>
                                        <td>{{ $s->status }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

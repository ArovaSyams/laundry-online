<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'user_id' => 2,
                'toko_id' => 1,
                'alamat' => 'Jln. Hibrida 8 No. 13A kel. Sidomulyo Kec. Gading Cempaka Kota Bengkulu',
                'provinsi' => 'Bengkulu',
                'kota' => 'Bengkulu',
                'kecamatan' => 'Gading Cempaka',
                'kelurahan' => 'Sidomulyo',
                'jumlah_qty' => 10,
                'total' => 20.000,
                'waktu_pengambilan' => 'Pagi',
                'tanggal_pemesanan' => 1222-10-10,
                'tanggal_jadi' => 1222-10-10,
                'created_at' => now()
            ],
            [
                'user_id' => 3,
                'toko_id' => 2,
                'alamat' => 'Jln. Hibrida 8 No. 13A kel. Sidomulyo Kec. Gading Cempaka Kota Bengkulu',
                'provinsi' => 'Bengkulu',
                'kota' => 'Bengkulu',
                'kecamatan' => 'Gading Cempaka',
                'kelurahan' => 'Sidomulyo',
                'jumlah_qty' => 10,
                'total' => 20.000,
                'waktu_pengambilan' => 'Pagi',
                'tanggal_pemesanan' => 1222-10-10,
                'tanggal_jadi' => NULL,
                'created_at' => now()
            ],
            [
                'user_id' => 2,
                'toko_id' => 3,
                'alamat' => 'Jln. Hibrida 8 No. 13A kel. Sidomulyo Kec. Gading Cempaka Kota Bengkulu',
                'provinsi' => 'Bengkulu',
                'kota' => 'Bengkulu',
                'kecamatan' => 'Gading Cempaka',
                'kelurahan' => 'Sidomulyo',
                'jumlah_qty' => 10,
                'total' => 20.000,
                'waktu_pengambilan' => 'Pagi',
                'tanggal_pemesanan' => 1222-10-10,
                'tanggal_jadi' => 1222-10-10,
                'created_at' => now()
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tokos')->insert([
            [
                'nama_toko' => 'Sriwijaya Laundry',
                'user_id' => 2,
                'alamat' => 'Jln. Hibrida 8 No. 13A kel. Sidomulyo Kec. Gading Cempaka Kota Bengkulu',
                'provinsi' => 'Bengkulu',
                'kota' => 'Bengkulu',
                'kecamatan' => 'Gading Cempaka',
                'kelurahan' => 'Sidomulyo',
                'foto_1' => 'asdasdads.jpg',
                'foto_2' => 'asdasdads.jpg',
                'foto_3' => 'asdasdads.jpg',
                'deskripsi' => 'toko sriwijaya laundry menjamin cucian anda bersih dan wangi dalam waktu singkat.',
                'metode_penjualan' => 'Kiloan',
                'harga' => 'Rp 10.000 / Kilo',
                'hari_kerja_mulai' => 'Senin',
                'hari_kerja_sampai' => 'Sabtu',
                'jam_buka_mulai' => '08.00',
                'jam_buka_sampai' => '18.00',
            ],
            [
                'nama_toko' => 'Jago Laundry',
                'user_id' => 2,
                'alamat' => 'Jln. Hibrida 8 No. 13A kel. Sidomulyo Kec. Gading Cempaka Kota Bengkulu',
                'provinsi' => 'Jawa Tengah',
                'kota' => 'Blora',
                'kecamatan' => 'Gading Cempaka',
                'kelurahan' => 'Sidomulyo',
                'foto_1' => 'asdasdads.jpg',
                'foto_2' => 'asdasdads.jpg',
                'foto_3' => 'asdasdads.jpg',
                'deskripsi' => 'toko Jago laundry menjamin cucian anda bersih dan wangi dalam waktu singkat.',
                'metode_penjualan' => 'Kiloan',
                'harga' => 'Rp 10.000 / Kilo',
                'hari_kerja_mulai' => 'Senin',
                'hari_kerja_sampai' => 'Sabtu',
                'jam_buka_mulai' => '08.00',
                'jam_buka_sampai' => '18.00',
            ],
            [
                'nama_toko' => 'Sicepat Laundry',
                'user_id' => 3,
                'alamat' => 'Jln. Hibrida 8 No. 13A kel. Sidomulyo Kec. Gading Cempaka Kota Bengkulu',
                'provinsi' => 'Jakarta',
                'kota' => 'Jakarta',
                'kecamatan' => 'Gading Cempaka',
                'kelurahan' => 'Sidomulyo',
                'foto_1' => 'asdasdads.jpg',
                'foto_2' => 'asdasdads.jpg',
                'foto_3' => 'asdasdads.jpg',
                'deskripsi' => 'toko sriwijaya laundry menjamin cucian anda bersih dan wangi dalam waktu singkat.',
                'metode_penjualan' => 'Kiloan',
                'harga' => 'Rp 10.000 / Kilo',
                'hari_kerja_mulai' => 'Senin',
                'hari_kerja_sampai' => 'Sabtu',
                'jam_buka_mulai' => '08.00',
                'jam_buka_sampai' => '18.00',
            ],
        ]);
    }
}

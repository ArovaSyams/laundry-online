<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlamatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alamats')->insert([
            [
                'user_id' => 2,
                'nama' => 'Ivan',
                'alamat' => 'Jln. Hibrida 8 No. 13A kel. Sidomulyo Kec. Gading Cempaka Kota Bengkulu',
                'provinsi' => 'Jawa Timur',
                'kota' => 'Tulung Agung',
                'kecamatan' => 'Gading Cempaka',
                'kelurahan' => 'Sidomulyo',
                'no_telp' => '08139284938'
            ],
            [
                'user_id' => 2,
                'nama' => 'Alan',
                'alamat' => 'Jln. Hibrida 8 No. 13A kel. Sidomulyo Kec. Gading Cempaka Kota Bengkulu',
                'provinsi' => 'Jawa Timur',
                'kota' => 'Tulung Agung',
                'kecamatan' => 'Gading Cempaka',
                'kelurahan' => 'Sidomulyo',
                'no_telp' => '08139284938'
            ]
        ]);
    }
}

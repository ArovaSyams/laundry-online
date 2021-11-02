<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama' => 'Muhammad Nabil Asrofi',
            'email' => 'nabilasrofi@gmail.com',
            'password' => Hash::make('nabil123'),
            'role' => 'admin',
            'tanggal_lahir' => '17 Agustus 2000',
            'alamat' => 'Jln. Hibrida 8 No. 13A kel. Sidomulyo Kec. Gading Cempaka Kota Bengkulu',
            'provinsi' => 'Bengkulu',
            'kota' => 'Bengkulu',
            'kecamatan' => 'Gading Cempaka',
            'kelurahan' => 'Sidomulyo',
            'point' => 10,
            'foto' => 'asdasdasdasdasd.jpg'
        ]);
    }
}

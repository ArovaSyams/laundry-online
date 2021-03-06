<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
        $date = Carbon::now();

        DB::table('users')->insert([
            [
                'nama' => 'Administrator',
                'email' => 'admin@gmail.com',
                'no_telp' => '0812 3456 7890',
                'password' => Hash::make('admin'),
                'role' => 'admin',
                'tanggal_lahir' => $date->toDateTimeString(),
                'jenis_kelamin' => 'Laki-laki',
                'point' => 10,
                'foto' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Wifqo Arova Syams',
                'email' => 'wifqoarova17@gmail.com',
                'no_telp' => '0812 3456 7890',
                'password' => Hash::make('wifqo123'),
                'role' => 'user',
                'tanggal_lahir' => $date->toDateTimeString(),
                'jenis_kelamin' => 'Laki-laki',
                'point' => 150,
                'foto' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Ivanka Alan',
                'email' => 'user@gmail.com',
                'no_telp' => '0812 3456 7890',
                'password' => Hash::make('user'),
                'role' => 'user',
                'tanggal_lahir' => $date->toDateTimeString(),
                'jenis_kelamin' => 'Laki-laki',
                'point' => 200,
                'foto' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Ivankal Alan M',
                'email' => 'ivankalanm@gmail.com',
                'no_telp' => '0812 3456 7890',
                'password' => Hash::make('ivankam123'),
                'role' => 'user',
                'tanggal_lahir' => $date->toDateTimeString(),
                'jenis_kelamin' => 'Laki-laki',
                'point' => 200,
                'foto' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

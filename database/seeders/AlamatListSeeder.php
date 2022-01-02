<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlamatListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alamat_lists')->insert([
            [
                'kabupaten' => 'Jombang',
                'kecamatan' => 'Bandarkedungmulyo',
                'kelurahan' => ''
            ],
            [
                'kabupaten' => 'Jombang',
                'kecamatan' => 'Bareng',
                'kelurahan' => ''
            ],
            [
                'kabupaten' => 'Jombang',
                'kecamatan' => 'Diwek',
                'kelurahan' => ''
            ],
            [
                'kabupaten' => 'Jombang',
                'kecamatan' => 'Gudo',
                'kelurahan' => ''
            ],
            [
                'kabupaten' => 'Jombang',
                'kecamatan' => 'Jogoroto',
                'kelurahan' => ''
            ],
            [
                'kabupaten' => 'Jombang',
                'kecamatan' => 'Kabuh',
                'kelurahan' => ''
            ],
            [
                'kabupaten' => 'Jombang',
                'kecamatan' => 'Kesamben',
                'kelurahan' => ''
            ],
            [
                'kabupaten' => 'Jombang',
                'kecamatan' => 'Kudu',
                'kelurahan' => ''
            ],
            [
                'kabupaten' => 'Jombang',
                'kecamatan' => 'Megaluh',
                'kelurahan' => ''
            ],
            [
                'kabupaten' => 'Jombang',
                'kecamatan' => 'Mojoagung',
                'kelurahan' => ''
            ],
            [
                'kabupaten' => 'Jombang',
                'kecamatan' => 'Mojowarno',
                'kelurahan' => ''
            ],
            [
                'kabupaten' => 'Jombang',
                'kecamatan' => 'Ngoro',
                'kelurahan' => ''
            ],
            [
                'kabupaten' => 'Jombang',
                'kecamatan' => 'Ngusikan',
                'kelurahan' => ''
            ],
            [
                'kabupaten' => 'Jombang',
                'kecamatan' => 'Perak',
                'kelurahan' => ''
            ],
            [
                'kabupaten' => 'Jombang',
                'kecamatan' => 'Peterongan',
                'kelurahan' => ''
            ],
            [
                'kabupaten' => 'Jombang',
                'kecamatan' => 'Plandaan',
                'kelurahan' => ''
            ],
            [
                'kabupaten' => 'Jombang',
                'kecamatan' => 'Ploso',
                'kelurahan' => ''
            ],
            [
                'kabupaten' => 'Jombang',
                'kecamatan' => 'Sumobito',
                'kelurahan' => ''
            ],
            [
                'kabupaten' => 'Jombang',
                'kecamatan' => 'Tembelang',
                'kelurahan' => ''
            ],
            [
                'kabupaten' => 'Jombang',
                'kecamatan' => 'Wonosalam',
                'kelurahan' => ''
            ],
            
        ]);
    }
}

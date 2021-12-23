<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KomentarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('komentars')->insert([
            [
                'user_id' => 2,
                'toko_id' => 1,
                'rating' => 5,
                'komentar' => 'pelayanan sangat bagus, jadi cepat, dengan pakaian yang bersih dan wangi'
            ],
            [
                'user_id' => 3,
                'toko_id' => 1,
                'rating' => 4,
                'komentar' => 'pelayanan sangat bagus, jadi cepat, dengan pakaian yang bersih dan wangi'
            ],
            [
                'user_id' => 2,
                'toko_id' => 2,
                'rating' => 5,
                'komentar' => 'pelayanan sangat bagus, jadi cepat, dengan pakaian yang bersih dan wangi'
            ],
            [
                'user_id' => 1,
                'toko_id' => 3,
                'rating' => 5,
                'komentar' => 'pelayanan sangat bagus, jadi cepat, dengan pakaian yang bersih dan wangi'
            ],

        ]);
    }
}

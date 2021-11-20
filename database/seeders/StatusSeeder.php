<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            [
                'user_id' => 2,
                'toko_id' => 1,
                'status' => 'Pengambilan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 3,
                'toko_id' => 2,
                'status' => 'Pengambilan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'toko_id' => 3,
                'status' => 'Pengambilan',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}

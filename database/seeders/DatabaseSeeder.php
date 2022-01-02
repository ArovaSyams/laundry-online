<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(TokoSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(LanggananSeeder::class);
        $this->call(KomentarSeeder::class);
        $this->call(AlamatSeeder::class);
        $this->call(AlamatListSeeder::class);
    }
}

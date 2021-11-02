<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokos', function (Blueprint $table) {
            $table->id();
            $table->string('nama_toko');
            $table->foreignId('user_id');
            $table->string('alamat');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('foto_1');
            $table->string('foto_2')->nullable();
            $table->string('foto_3')->nullable();
            $table->longText('deskripsi');
            $table->string('metode_penjualan');
            $table->string('harga');
            $table->string('hari_kerja_mulai');
            $table->string('hari_kerja_sampai');
            $table->string('jam_buka_mulai');
            $table->string('jam_buka_sampai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tokos');
    }
}

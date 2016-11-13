<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStokGudangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_gudangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_barang');
            $table->string('pabrik');
            $table->string('jumlah_barang');
            $table->string('harga_atas');
            $table->string('harga_bawah');
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
        Schema::dropIfExists('stok_gudangs');
    }
}

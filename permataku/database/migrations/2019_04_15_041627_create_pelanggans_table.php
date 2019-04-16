<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelanggansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->unsignedinteger('id_agen');
            
            $table->increments('id_pelanggan');
            $table->foreign('id_agen')->references('id_agen')->on('agens');
            $table->string('nama_lengkap',50);
            $table->string('jenis_kelamin',10);
            $table->string('ttl',50);
            $table->string('alamat',100);
            $table->string('jumlah_transaksi',3);
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
        Schema::dropIfExists('pelanggans');
    }
}

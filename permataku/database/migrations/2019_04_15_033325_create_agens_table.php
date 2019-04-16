<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agens', function (Blueprint $table) {
            $table->unsignedinteger('id_user');

            $table->increments('id_agen');
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->string('foto_diri',25);
            $table->string('nama_lengkap',50);
            $table->string('nik',16);
            $table->string('jenis_kelamin',10);
            $table->string('ttl',50);
            $table->string('alamat',100);
            $table->string('agama',25);
            $table->string('pekerjaan',25);
            $table->string('foto_ktp',25);
            $table->string('no_rekening',10);
            $table->integer('pin_rekening');
            $table->integer('saldo_rekening')->nullable();
            $table->integer('total_transaksi')->nullable();
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
        Schema::dropIfExists('agens');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembeli', function (Blueprint $table) {
            $table->increments('id_pembeli');
            $table->string('nama');
            $table->string('jns_kelamin');
            $table->string('alamat');
            $table->integer('kode_pos');
            $table->string('kota');
            $table->date('tgl_lahir');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembeli');
    }
}

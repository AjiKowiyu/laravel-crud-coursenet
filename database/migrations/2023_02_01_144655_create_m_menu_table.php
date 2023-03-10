<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_menu', function (Blueprint $table) {
            $table->id();
            $table->string('kode_menu', 3);
            $table->string('nama_menu');
            $table->string('varian');
            $table->string('kode_kategori', 3);
            $table->integer('harga_jual');
            $table->dateTime('created_date');
            $table->dateTime('updated_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_menu');
    }
}

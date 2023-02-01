<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStokKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_keluar', function (Blueprint $table) {
            $table->id();
            $table->string('kode_cabang', 3);
            $table->string('kode_menu', 3);
            $table->integer('qty');
            $table->string('kode_status', 3);
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
        Schema::dropIfExists('stok_keluar');
    }
}

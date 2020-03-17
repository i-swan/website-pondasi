<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_rek_asal', 100);
            $table->string('nama', 100);
            $table->integer('jumlah');
            $table->date('tanggal');
            $table->string('keterangan');
            $table->string('file_foto');
            $table->integer('rekening_id');
            $table->integer('created_by');
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
        Schema::dropIfExists('donasi');
    }
}
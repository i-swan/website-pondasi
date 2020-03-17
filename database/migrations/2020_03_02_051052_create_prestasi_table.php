<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100);
            $table->integer('jenis_prestasi_id');
            $table->integer('ketua_in')->nullable();
            $table->string('ketua_ex', 100)->nullable();
            $table->string('host', 100);
            $table->string('lokasi', 100);
            $table->date('tanggal');
            $table->string('judul_karya', 100);
            $table->string('juara_ke', 100)->nullable();
            $table->string('hadiah', 100)->nullable();
            $table->string('file_foto')->nullable();
            $table->integer('created_by');
            $table->softDeletes();
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
        Schema::dropIfExists('prestasi');
    }
}
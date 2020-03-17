<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 50);
            $table->enum('jk',['laki-laki','perempuan']);
            $table->enum('status',['pengurus','member']);
            $table->string('file_foto');
            $table->date('tanggal_lahir');
            $table->string('daerah_asal');
            $table->char('no_hp', 15);
            $table->string('email');
            $table->enum('gol_darah',['Tidak tahu', 'A', 'B', 'AB', 'O']);
            $table->string('riwayat_sakit');
            $table->string('jurusan_ipb');
            $table->char('angkatan_ipb', 3);
            $table->date('masuk_pondasi');
            $table->date('lulus_pondasi')->nullable($value = true);
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
        Schema::dropIfExists('anggota');
    }
}
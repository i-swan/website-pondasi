<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaPrestasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_prestasi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('anggota_in');
            $table->string('anggota_ex', 100)->nullable();
            $table->integer('prestasi_id');
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
        Schema::dropIfExists('anggota_prestasi');
    }
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    //
    protected $table = "Donasi";
    protected $fillable = ['no_rek_asal', 'nama', 'jumlah', 'tanggal', 'keterangan', 'file_foto', 'rekening_id', 'created_by'];
    //protected $dates= ['deleted_at'];

    public function jenis_rekening()
    {
    	return $this->belongsTo('App\Jenis_rekening','rekening_id');
    }
}
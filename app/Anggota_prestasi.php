<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota_prestasi extends Model
{
    protected $table = "anggota_prestasi";
    protected $fillable = ['anggota_in', 'anggota_ex', 'prestasi_id', 'created_by','created_at','updated_at'];
    //protected $dates= ['deleted_at'];

    public function anggota()
    {
    	return $this->belongsTo('App\Anggota','anggota_in');
    }

    public function prestasi()
    {
    	return $this->belongsTo('App\Prestasi','prestasi_id');
    }
}

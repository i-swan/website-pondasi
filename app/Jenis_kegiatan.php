<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis_kegiatan extends Model
{
    //
    protected $table = "Jenis_kegiatan";
    protected $fillable = ['nama_jenis','created_by'];

    public function kegiatan()
    {
    	return $this->hasMany('App\Kegiatan');
    }
}

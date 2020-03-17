<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis_prestasi extends Model
{
    //
    protected $table = "Jenis_prestasi";
    protected $fillable = ['nama_jenis', 'created_by'];

    public function prestasi()
    {
    	return $this->hasMany('App\Prestasi');
    }
}

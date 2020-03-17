<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Prestasi extends Model
{
    use SoftDeletes;

    protected $table = "prestasi";
    protected $fillable = ['nama','jenis_prestasi_id', 'ketua_in', 'ketua_ex','host','lokasi','tanggal','judul_karya','juara_ke','hadiah','file_foto','created_by'];
    //protected $dates= ['deleted_at'];

    public function jenis_prestasi()
    {
    	return $this->belongsTo('App\Jenis_prestasi');
    }

    public function anggota()
    {
    	return $this->belongsTo('App\Anggota','ketua_in');
    }

    public function anggota_prestasi()
    {
        return $this->hasMany('App\Prestasi','prestasi_id');
    }
}

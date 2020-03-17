<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Kegiatan extends Model
{
    //
    use SoftDeletes;

    protected $table = "Kegiatan";
    protected $fillable = ['nama','jenis_kegiatan_id','tanggal','lokasi','file_foto','ringkasan','pj','created_by'];
    //protected $dates= ['deleted_at'];

    public function jenis_kegiatan()
    {
    	return $this->belongsTo('App\Jenis_kegiatan');
    }

    public function anggota()
    {
    	return $this->belongsTo('App\Anggota','created_by');
    }

    public function anggota_pj()
    {
        return $this->belongsTo('App\Anggota','pj');
    }
}

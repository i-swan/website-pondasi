<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anggota extends Model
{
    //
    use SoftDeletes;

    protected $table = "anggota";
    protected $fillable = ['nama','status','jk','file_foto','tanggal_lahir','daerah_asal','no_hp', 'email','gol_darah', 'riwayat_sakit', 'jurusan_ipb','angkatan_ipb','masuk_pondasi', 'lulus_pondasi', 'created_by'];
    //protected $dates= ['deleted_at'];

    public function kegiatan()
    {
    	return $this->hasMany('App\Kegiatan','created_by');
    }

    public function kegiatan_pj()
    {
        return $this->hasMany('App\Kegiatan','pj');
    }

    public function prestasi()
    {
    	return $this->hasMany('App\Prestasi','ketua_in');
    }

    public function anggota_prestasi()
    {
        return $this->hasMany('App\Prestasi','anggota_in');
    }
}

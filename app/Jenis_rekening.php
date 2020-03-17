<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis_rekening extends Model
{
    //
    protected $table = "jenis_rekening";
    protected $fillable = ['bank', 'nama', 'no_rek', 'created_by'];
    //protected $dates= ['deleted_at'];

    public function donasi()
    {
    	return $this->hasMany('App\Donasi', 'rekening_id');
    } 
}

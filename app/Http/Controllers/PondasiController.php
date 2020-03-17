<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\About;
use App\Anggota;
use App\Donasi;
use App\Jenis_rekening;
use App\Kegiatan;
use App\Jenis_kegiatan;
use App\Prestasi;
use App\Jenis_prestasi;
use App\Anggota_prestasi;
 
class PondasiController extends Controller
{

    public function index(){

        $anggota = Anggota::orderBy('id','desc')->take(4)->get();
        $kegiatan = Kegiatan::orderBy('id','desc')->take(3)->get();
        $prestasi = Prestasi::orderBy('id','desc')->take(6)->get();
        $galeri = Kegiatan::select('file_foto')->orderBy('id','desc')->take(5)->get();
        $menu = 'home';

    	return view('frontend.index', compact('anggota','kegiatan','prestasi', 'galeri', 'menu'));
    }

    public function anggota(){

        $anggota = Anggota::orderBy('id','desc')->paginate(16);
        $judul = "M E M B E R";
        $menu = 'member';

    return view('frontend.anggota.index', compact('anggota','judul','menu'));
    }

    public function anggota_detail($id){

        $anggota = Anggota::findOrFail($id);
        $kegiatan = Kegiatan::where('pj', $id)->orderBy('pj','desc')->get();
        $jumlah_kegiatan = $kegiatan->count();
        $prestasi = Prestasi::where('ketua_in', $id)->orderBy('ketua_in','desc')->get();
        $anggota_prestasi = Anggota_prestasi::where('anggota_in', $id)->get();
        $jumlah_prestasi = $anggota_prestasi->count() + $prestasi->count();
        $judul = "M E M B E R";
        $menu = 'member';

        return view('frontend.anggota.detail', compact('anggota','judul','kegiatan','jumlah_kegiatan','prestasi', 'anggota_prestasi','jumlah_prestasi','menu'));
    }

    public function kegiatan(){

        $kegiatan = Kegiatan::orderBy('id','desc')->paginate(2);
        $jumlah_kategori = Jenis_kegiatan::latest('id')->first();
        $jenis_kegiatan = Jenis_kegiatan::all();
        $kategori = Kegiatan::
             select('jenis_kegiatan_id', DB::raw('count(*) as total'))
             ->groupBy('jenis_kegiatan_id')
             ->pluck('total','jenis_kegiatan_id')->all();
        $judul = "K E G I A T A N";
        $menu = 'kegiatan';

    return view('frontend.kegiatan.index', compact('kegiatan','judul', 'kategori','jumlah_kategori','jenis_kegiatan','menu','judul'));
    }

    public function kegiatan_detail($id){

        $kegiatan = Kegiatan::findOrFail($id);
        $jumlah_kategori = Jenis_kegiatan::latest('id')->first();
        $jenis_kegiatan = Jenis_kegiatan::all();
        $kategori = Kegiatan::
             select('jenis_kegiatan_id', DB::raw('count(*) as total'))
             ->groupBy('jenis_kegiatan_id')
             ->pluck('total','jenis_kegiatan_id')->all();
        $judul = "K E G I A T A N";
        $menu = 'kegiatan';

        return view('frontend.kegiatan.detail', compact('kegiatan','judul', 'kategori','jumlah_kategori','jenis_kegiatan','menu','judul'));
    }

    public function prestasi_detail($id){

        $prestasi = Prestasi::findOrFail($id);
        $anggota_prestasi = Anggota_prestasi::where('prestasi_id', $id)->orderBy('id','desc')->get();
        $judul = "P R E S T A S I";
        $menu = 'prestasi';

        return view('frontend.prestasi.detail', compact('prestasi','anggota_prestasi','menu','judul'));
    }

}
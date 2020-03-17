<?php
 
namespace App\Http\Controllers;

use Session;
use File;
use PDF;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Anggota;
use App\Kegiatan;
use App\Prestasi;
use App\Anggota_prestasi;

use App\Exports\AnggotaExport;

use Maatwebsite\Excel\Facades\Excel;
 
class AnggotaController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'anggota';

        $anggota = Anggota::orderBy('id','desc')->paginate(10);

    	return view('backend.anggota.index',compact('login', 'login_id', 'admin', 'anggota','menu'));
    }

    public function profil(){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'anggota/profil';

        $anggota = Anggota::orderBy('id','desc')->paginate(12);
        $now = date('Y-m-d');
        $jumlah_kegiatan = Kegiatan::
             select('pj', DB::raw('count(*) as total'))
             ->groupBy('pj')
             ->pluck('total','pj')->all();
        $jumlah_prestasi_ketua = Prestasi::
             select('ketua_in', DB::raw('count(*) as total_ketua'))
             ->groupBy('ketua_in')
             ->pluck('total_ketua','ketua_in')->all();
        $jumlah_prestasi_anggota = Anggota_prestasi::
             select('anggota_in', DB::raw('count(*) as total_anggota'))
             ->groupBy('anggota_in')
             ->pluck('total_anggota','anggota_in')->all();

        return view('backend.anggota.profil', compact('login', 'login_id', 'admin', 'anggota','now','menu','jumlah_kegiatan','jumlah_prestasi_ketua','jumlah_prestasi_anggota'));
    }

    public function profil_lengkap($id){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'anggota/profil';

        $anggota = Anggota::findOrFail($id);
        $kegiatan = Kegiatan::where('pj', $id)->orderBy('pj','desc')->get();
        $jumlah_kegiatan = $kegiatan->count();
        $prestasi = Prestasi::where('ketua_in', $id)->orderBy('ketua_in','desc')->get();
        $anggota_prestasi = Anggota_prestasi::where('anggota_in', $id)->get();
        $jumlah_prestasi = $anggota_prestasi->count() + $prestasi->count();

        return view('backend.anggota.profil_lengkap', compact('login', 'login_id', 'admin', 'anggota','menu','kegiatan','jumlah_kegiatan','prestasi', 'anggota_prestasi','jumlah_prestasi'));
    }

    public function tambah(){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'anggota';

        return view('backend.anggota.tambah', compact('login', 'login_id', 'admin', 'menu'));
    }

    public function simpan(Request $request){

        $this->validate($request,[
            'nama' => 'required',
            'status' => 'required',
            'jk' => 'required',
            'file_foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'tanggal_lahir' => 'required',
            'daerah_asal' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'gol_darah' => 'required',
            'riwayat_sakit' => 'required',
            'jurusan_ipb' => 'required',
            'angkatan_ipb' => 'required',
            'masuk_pondasi' => 'required',
        ]);

        $file_foto = $request->file('file_foto');
        $nama_file = time()."_".$file_foto->getClientOriginalName();
 
        $tujuan_upload = 'foto_member';
        $file_foto->move($tujuan_upload,$nama_file);

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();

        Anggota::create([
            'nama' => $request->nama,
            'status' => $request->status,
            'jk' => $request->jk,
            'file_foto' => $nama_file,
            'tanggal_lahir' => $request->tanggal_lahir,
            'daerah_asal' => $request->daerah_asal,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'gol_darah' => $request->gol_darah,
            'riwayat_sakit' => $request->riwayat_sakit,
            'jurusan_ipb' => $request->jurusan_ipb,
            'angkatan_ipb' => $request->angkatan_ipb,
            'masuk_pondasi' => $request->masuk_pondasi,
            'created_by' => $admin->id,
        ]);

        Session::flash('tambah', 'Data telah berhasil disimpan!');
        return redirect('/anggota');
    }

    public function edit($id, Request $request){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'anggota';

        $anggota = Anggota::find($id);
        $tipe_hal = $request->tipe_hal;

        return view('backend.anggota.edit', compact('login', 'login_id', 'admin', 'anggota','menu','tipe_hal'));
    }

    public function update($id, Request $request){

        $this->validate($request,[
            'nama' => 'required',
            'status' => 'required',
            'jk' => 'required',
            'tanggal_lahir' => 'required',
            'daerah_asal' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'gol_darah' => 'required',
            'riwayat_sakit' => 'required',
            'jurusan_ipb' => 'required',
            'angkatan_ipb' => 'required',
            'masuk_pondasi' => 'required',
        ]);

        $nama_file = $request->hidden_image;
        $file_foto = $request->file('file_foto');

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();

        if($file_foto!=''){
            $this->validate($request,[
                'file_foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $nama_file = time()."_".$file_foto->getClientOriginalName();
            $tujuan_upload = 'foto_member';
            $file_foto->move($tujuan_upload,$nama_file);
        }

        $anggota = Anggota::find($id);
        $anggota->nama = $request->nama;
        $anggota->status = $request->status;
        $anggota->jk = $request->jk;
        $anggota->file_foto = $nama_file;
        $anggota->tanggal_lahir = $request->tanggal_lahir;
        $anggota->daerah_asal = $request->daerah_asal;
        $anggota->no_hp = $request->no_hp;
        $anggota->email = $request->email;
        $anggota->gol_darah = $request->gol_darah;
        $anggota->riwayat_sakit = $request->riwayat_sakit;
        $anggota->jurusan_ipb = $request->jurusan_ipb;
        $anggota->angkatan_ipb = $request->angkatan_ipb;
        $anggota->masuk_pondasi = $request->masuk_pondasi;
        $anggota->created_by = $admin->id;
        $anggota->save();

        Session::flash('edit', 'Data telah berhasil diedit!');
        if($request->tipe_hal == 'profil_lengkap'){
            return redirect('/anggota/profil-lengkap/'.$anggota->id);
        }else{
            return redirect('/anggota');
        }
    }

    public function hapus($id){

        $anggota = Anggota::find($id);
        $anggota->delete();
        Session::flash('hapus', 'Data telah berhasil dihapus!');

        return redirect('/anggota');
    }

    public function recycle_bin(){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'anggota/recycle_bin';

        $anggota = Anggota::onlyTrashed()->orderBy('id','desc')->paginate(10);

        return view('backend.anggota.recycle_bin', compact('login', 'login_id', 'admin', 'anggota','menu'));
    }

    public function restore($id){

        $anggota = Anggota::onlyTrashed()->where('id', $id);
        $anggota->restore();
        Session::flash('restore', 'Data telah berhasil direstore!');

        return back();
    }

    public function hapus_permanen($id){

        $anggota = Anggota::onlyTrashed()->where('id', $id);
        $anggota->forceDelete();
        Session::flash('hapus_permanen', 'Data telah berhasil dihapus secara permanen!');

        return redirect('/anggota/recycle_bin');
    }

    public function cetak_pdf()
    {
        $anggota = Anggota::all();
        $pdf = PDF::loadview('backend.anggota.anggota_pdf',['anggota'=>$anggota]);
        return $pdf->download('anggota-pdf');

    }

    public function export_excel()
    {
        return Excel::download(new AnggotaExport, 'anggota.xlsx');
    }

}
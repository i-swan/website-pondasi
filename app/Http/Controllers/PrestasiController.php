<?php
 
namespace App\Http\Controllers;

Use Carbon\Carbon;
use Session;
use File;
use PDF;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Anggota;
use App\Prestasi;
use App\Jenis_prestasi;
use App\Anggota_prestasi;
use App\Exports\PrestasiExport;

use Maatwebsite\Excel\Facades\Excel;

class PrestasiController extends Controller
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
        $menu = 'prestasi';

        $prestasi = Prestasi::orderBy('id','desc')->paginate(10);

        return view('backend.prestasi.index',compact('login', 'login_id', 'admin','prestasi','menu'));
    }

    public function detail($id){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'prestasi/detail';

        $prestasi = Prestasi::findOrFail($id);
        $anggota_prestasi = Anggota_prestasi::where('prestasi_id', $id)->orderBy('id','desc')->get();

        return view('backend.prestasi.detail',compact('login', 'login_id', 'admin','prestasi','menu','anggota_prestasi'));
    }

    public function tambah(){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'prestasi';

        $anggota = Anggota::all();
        $jenis_prestasi = Jenis_prestasi::all();

        return view('backend.prestasi.tambah',compact('login', 'login_id', 'admin','menu','jenis_prestasi', 'anggota'));
    }

    public function simpan(Request $request){

        $this->validate($request,[
            'nama' => 'required',
            'jenis_prestasi_id' => 'required',
            'host' => 'required',
            'lokasi' => 'required',
            'tanggal' => 'required',
            'judul_karya' => 'required',
        ]);

        $ketua_in = $request->ketua_in;
        $ketua_ex = $request->ketua_ex;
        $juara_ke = $request->juara_ke;
        $hadiah = $request->hadiah;
        $file_foto = $request->file('file_foto');
        $nama_file = '';

        if($ketua_in == 'default'){
            $ketua_in = Null;
        }else{
            $ketua_in = $ketua_in;
        }

        if($ketua_ex!=''){
            $ketua_ex= $ketua_ex;
        }else{
            $ketua_ex ='';
        }

        if($juara_ke!=''){
            $juara_ke= $juara_ke;
        }else{
            $juara_ke ='';
        }

        if($hadiah!=''){
            $hadiah= $hadiah;
        }else{
            $hadiah ='';
        }

        if($file_foto!=''){

            $nama_file = time()."_".$file_foto->getClientOriginalName();
            $tujuan_upload = 'foto_prestasi';
            $file_foto->move($tujuan_upload,$nama_file);
        }

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $admin = Anggota::where('nama','=', $login)->first();
 
        Prestasi::create([
            'nama' => $request->nama,
            'jenis_prestasi_id' => $request->jenis_prestasi_id,
            'ketua_in' => $ketua_in,
            'ketua_ex' => $ketua_ex,
            'host' => $request->host,
            'lokasi' => $request->lokasi,
            'tanggal' => $request->tanggal,
            'judul_karya' => $request->judul_karya,
            'juara_ke' => $juara_ke,
            'hadiah' => $hadiah,
            'file_foto' => $nama_file,
            'created_by' => $admin->id,
        ]);

        $prestasi_now = Prestasi::latest('id')->first();
        $now = Carbon::now()->toDateTimeString();
        $all_anggota = array();
        
        for($i=0; $i<5; ++$i){

            if($request->input('anggota_in_'.strval($i))=='default'){
                $anggota_in = 0; 
            }else{
                $anggota_in = $request->input('anggota_in_'.strval($i));
            }

            if($request->input('anggota_ex_'.strval($i))==''){
                $anggota_ex = Null; 
            }else{
                $anggota_ex = $request->input('anggota_ex_'.strval($i));
            }

            if($anggota_in != 0 or $anggota_ex != Null){
                $data = array(
                    'anggota_in' => $anggota_in,
                    'anggota_ex' => $anggota_ex,
                    'prestasi_id' => $prestasi_now->id,
                    'created_at' => $now,
                    'updated_at' => $now,
                    'created_by' => 1, // sementara selalu 1, nanti berdasarkan yg login
                    );
                array_push($all_anggota, $data);
            }
        } 

        Anggota_prestasi::insert($all_anggota);
        Session::flash('tambah', 'Data telah berhasil disimpan!');
        return redirect('/prestasi');
    }

    public function edit($id, Request $request){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'prestasi';

        $anggota = Anggota::all();
        $prestasi = Prestasi::find($id);
        $jenis_prestasi = Jenis_prestasi::all();
        $anggota_prestasi = Anggota_prestasi::where('prestasi_id', $id)->get();
        $tipe_hal = $request->tipe_hal;

        return view('backend.prestasi.edit',compact('login', 'login_id', 'admin','prestasi', 'jenis_prestasi', 'menu', 'anggota','tipe_hal','anggota_prestasi'));
    }

    public function update($id, Request $request){

        $this->validate($request,[
            'nama' => 'required',
            'jenis_prestasi_id' => 'required',
            'host' => 'required',
            'lokasi' => 'required',
            'tanggal' => 'required',
            'judul_karya' => 'required',
            //'anggota_id' => 'required',,
        ]);

        $ketua_in = $request->ketua_in;
        $ketua_ex = $request->ketua_ex;
        $juara_ke = $request->juara_ke;
        $hadiah = $request->hadiah;
        $file_foto = $request->file('file_foto');
        $nama_file = $request->hidden_image;

        if($ketua_in == 'default'){
            $ketua_in = Null;
        }else{
            $ketua_in = $ketua_in;
        }

        if($ketua_ex!=''){
            $ketua_ex= $ketua_ex;
        }else{
            $ketua_ex ='';
        }

        if($juara_ke!=''){
            $juara_ke= $juara_ke;
        }else{
            $juara_ke ='';
        }

        if($hadiah!=''){
            $hadiah= $hadiah;
        }else{
            $hadiah ='';
        }

        if($file_foto!=''){

            $nama_file = time()."_".$file_foto->getClientOriginalName();
            $tujuan_upload = 'foto_prestasi';
            $file_foto->move($tujuan_upload,$nama_file);
        }

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $admin = Anggota::where('nama','=', $login)->first();

        $prestasi = Prestasi::find($id);
        $prestasi->nama = $request->nama;
        $prestasi->jenis_prestasi_id = $request->jenis_prestasi_id;
        $prestasi->ketua_in = $ketua_in;
        $prestasi->ketua_ex = $ketua_ex;
        $prestasi->host = $request->host;
        $prestasi->lokasi = $request->lokasi;
        $prestasi->tanggal = $request->tanggal;
        $prestasi->judul_karya = $request->judul_karya;
        $prestasi->juara_ke = $juara_ke;
        $prestasi->hadiah = $hadiah;
        $prestasi->file_foto = $nama_file;
        $prestasi->created_by = $admin->id;
        $prestasi->save();

        $first = $request->id_anggota_prestasi_first;
        $prestasi_id = $request->prestasi_id;
        $now = Carbon::now()->toDateTimeString();

        for($i=0; $i<5; ++$i){

            if($request->input('anggota_in_'.strval($i))=='default'){
                $anggota_in = 0; 
            }else{
                $anggota_in = $request->input('anggota_in_'.strval($i));
            }

            if($request->input('anggota_ex_'.strval($i))==''){
                $anggota_ex = Null; 
            }else{
                $anggota_ex = $request->input('anggota_ex_'.strval($i));
            }

            $ap = Anggota_prestasi::where([['id','=', $first],['prestasi_id','=', $prestasi_id]])->first();
            if($ap){
                $ap->anggota_in = $anggota_in;
                $ap->anggota_ex = $anggota_ex;
                $ap->updated_at = $now;
                $ap->created_by = 1; // sementara selalu 1, nanti berdasarkan yg login
                $ap->save();
            }else{
                if($anggota_in != 0 or $anggota_ex != Null){
                     Anggota_prestasi::create([
                        'anggota_in' => $anggota_in,
                        'anggota_ex' => $anggota_ex,
                        'prestasi_id' => $prestasi_id,
                        'created_at' => $now,
                        'updated_at' => $now,
                        'created_by' => 1, // sementara selalu 1, nanti berdasarkan yg login
                    ]);
                }
            }
            ++$first;
        }

        Session::flash('edit', 'Data telah berhasil diedit!');
        if($request->tipe_hal == 'detail'){
            return redirect('/prestasi/detail/'.$prestasi->id);
        }else{
            return redirect('/prestasi');
        }
    }

    public function hapus($id){

        $prestasi = Prestasi::find($id);
        $prestasi->delete();
        Session::flash('hapus', 'Data telah berhasil dihapus!');

        return redirect('/prestasi');
    }

    public function recycle_bin(){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'prestasi/recycle_bin';

        $prestasi = Prestasi::onlyTrashed()->orderBy('id','desc')->paginate(10);

        return view('backend.prestasi.recycle_bin',compact('login', 'login_id', 'admin','prestasi','menu'));
    }

    public function restore($id){

        $prestasi = Prestasi::onlyTrashed()->where('id', $id);
        $prestasi->restore();
        Session::flash('restore', 'Data telah berhasil direstore!');

        return back();
    }

    public function hapus_permanen($id){

        $prestasi = Prestasi::onlyTrashed()->where('id', $id);
        $prestasi->forceDelete();
        Session::flash('hapus_permanen', 'Data telah berhasil dihapus secara permanen!');

        return redirect('/prestasi/recycle-bin');
    }

    public function jenis(){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'prestasi/jenis';

        $jenis_prestasi = Jenis_prestasi::all();

        return view('backend.prestasi.jenis',compact('login', 'login_id', 'admin','jenis_prestasi','menu'));
    }

    public function tambah_jenis(){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'prestasi/jenis';

        return view('backend.prestasi.tambah_jenis_prestasi',compact('login', 'login_id', 'admin','menu'));
    }

    public function simpan_jenis(Request $request){

        $this->validate($request,[
            'nama_jenis' => 'required',
        ]);

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $admin = Anggota::where('nama','=', $login)->first();
 
        Jenis_prestasi::create([
            'nama_jenis' => $request->nama_jenis,
            'created_by' => $admin->id,
        ]);

        Session::flash('tambah', 'Data '. $request->nama_jenis .' telah berhasil disimpan!');
        return redirect('/prestasi/jenis-prestasi');
    }

    public function edit_jenis($id){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'prestasi/jenis';

        $jenis_prestasi = Jenis_prestasi::find($id);

        return view('backend.prestasi.edit_jenis_prestasi',compact('login', 'login_id', 'admin','jenis_prestasi','menu'));
    }

    public function update_jenis($id, Request $request){

        $this->validate($request,[
            'nama_jenis' => 'required',
        ]);

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $admin = Anggota::where('nama','=', $login)->first();

        $jenis_prestasi = Jenis_prestasi::find($id);
        $jenis_prestasi->nama_jenis = $request->nama_jenis;
        $jenis_prestasi->created_by = $admin->id;
        $jenis_prestasi->save();

        Session::flash('edit', 'Data '. $request->nama_jenis .' telah berhasil diedit!');
        return redirect('/prestasi/jenis-prestasi');
    }

    public function hapus_jenis($id){

        $jenis_prestasi = Jenis_prestasi::find($id);
        $jenis_prestasi->delete();

        Session::flash('hapus', 'Data '. $jenis_prestasi->nama_jenis .' telah berhasil dihapus!');
        return redirect('/prestasi/jenis-prestasi');
    }

    public function cetak_pdf()
    {
        $prestasi = Prestasi::all();
        $pdf = PDF::loadview('backend.prestasi.prestasi_pdf',['prestasi'=>$prestasi]);
        return $pdf->download('prestasi-pdf');
    }

    public function export_excel()
    {
        return Excel::download(new PrestasiExport, 'prestasi.xlsx');
    }

}
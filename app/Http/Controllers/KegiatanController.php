<?php
 
namespace App\Http\Controllers;

use Session;
use File;
use PDF;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Anggota;
use App\Kegiatan;
use App\Jenis_kegiatan;
use App\Exports\KegiatanExport;

use Maatwebsite\Excel\Facades\Excel;

class KegiatanController extends Controller
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
        $menu = 'kegiatan';

        $kegiatan = Kegiatan::orderBy('id','desc')->paginate(10);

        return view('backend.kegiatan.index',compact('login', 'login_id', 'admin','kegiatan','menu'));
    }

    public function detail($id){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'kegiatan/detail';

        $kegiatan = Kegiatan::findOrFail($id);

        return view('backend.kegiatan.detail',compact('login', 'login_id', 'admin','kegiatan','menu'));
    }

    public function tambah(){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'kegiatan';

        $jenis_kegiatan = Jenis_kegiatan::all();
        $anggota = Anggota::all();

        return view('backend.kegiatan.tambah',compact('login', 'login_id', 'admin','menu','jenis_kegiatan','anggota'));
    }

    public function simpan(Request $request){

        $this->validate($request,[
            'nama' => 'required',
            'jenis_kegiatan_id' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'file_foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'ringkasan' => 'required',
            'pj' => 'required',
        ]);

        $file_foto = $request->file('file_foto');
        $nama_file = time()."_".$file_foto->getClientOriginalName();
 
        $tujuan_upload = 'foto_kegiatan';
        $file_foto->move($tujuan_upload,$nama_file);

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $admin = Anggota::where('nama','=', $login)->first();
 
        Kegiatan::create([
            'nama' => $request->nama,
            'jenis_kegiatan_id' => $request->jenis_kegiatan_id,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'file_foto' => $nama_file,
            'ringkasan' => $request->ringkasan,
            'pj' => $request->pj,
            'created_by' => $admin->id,
        ]);

        Session::flash('tambah', 'Data telah berhasil disimpan!');
        return redirect('/kegiatan');
    }

    public function edit($id, Request $request){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'kegiatan';

        $anggota = Anggota::all();
        $kegiatan = Kegiatan::find($id);
        $jenis_kegiatan = Jenis_kegiatan::all();
        $tipe_hal = $request->tipe_hal;

        return view('backend.Kegiatan.edit',compact('login', 'login_id', 'admin','anggota', 'kegiatan', 'jenis_kegiatan', 'menu', 'tipe_hal'));
    }

    public function update($id, Request $request){

        $this->validate($request,[
            'nama' => 'required',
            'jenis_kegiatan_id' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'ringkasan' => 'required',
            'pj' => 'required',
        ]);

        $nama_file = $request->hidden_image;
        $file_foto = $request->file('file_foto');

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $admin = Anggota::where('nama','=', $login)->first();

        if($file_foto!=''){
            $this->validate($request,[
                'file_foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $nama_file = time()."_".$file_foto->getClientOriginalName();
            $tujuan_upload = 'foto_kegiatan';
            $file_foto->move($tujuan_upload,$nama_file);
        }

        $kegiatan = Kegiatan::find($id);
        $kegiatan->nama = $request->nama;
        $kegiatan->jenis_kegiatan_id = $request->jenis_kegiatan_id;
        $kegiatan->tanggal = $request->tanggal;
        $kegiatan->lokasi = $request->lokasi;
        $kegiatan->file_foto = $nama_file;
        $kegiatan->ringkasan = $request->ringkasan;
        $kegiatan->pj = $request->pj;
        $kegiatan->created_by = $admin->id;
        $kegiatan->save();

        Session::flash('edit', 'Data telah berhasil diedit!');
        if($request->tipe_hal == 'detail'){
            return redirect('/kegiatan/detail/'.$kegiatan->id);
        }else{
            return redirect('/kegiatan');
        }
    }

    public function hapus($id){

        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();
        Session::flash('hapus', 'Data telah berhasil dihapus!');

        return redirect('/kegiatan');
    }

    public function recycle_bin(){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'kegiatan/recycle_bin';

        $kegiatan = Kegiatan::onlyTrashed()->orderBy('id','desc')->paginate(10);

        return view('backend.Kegiatan.recycle_bin',compact('login', 'login_id', 'admin','kegiatan','menu'));
    }

    public function restore($id){

        $kegiatan = Kegiatan::onlyTrashed()->where('id', $id);
        $kegiatan->restore();
        Session::flash('restore', 'Data telah berhasil direstore!');

        return back();
    }

    public function hapus_permanen($id){

        $kegiatan = Kegiatan::onlyTrashed()->where('id', $id);
        $kegiatan->forceDelete();
        Session::flash('hapus_permanen', 'Data telah berhasil dihapus secara permanen!');

        return redirect('/kegiatan/recycle_bin');
    }

    public function jenis(){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'kegiatan/jenis';

        $jenis_kegiatan = Jenis_kegiatan::all();

        return view('backend.kegiatan.jenis',compact('login', 'login_id', 'admin','jenis_kegiatan','menu'));
    }

    public function tambah_jenis(){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'kegiatan/jenis';

        return view('backend.kegiatan.tambah_jenis_kegiatan',compact('login', 'login_id', 'admin','menu'));
    }

    public function simpan_jenis(Request $request){

        $this->validate($request,[
            'nama_jenis' => 'required',
        ]);

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $admin = Anggota::where('nama','=', $login)->first();
 
        Jenis_kegiatan::create([
            'nama_jenis' => $request->nama_jenis,
            'created_by' => $admin->id,
        ]);

        Session::flash('tambah', 'Data '. $request->nama_jenis .' telah berhasil disimpan!');
        return redirect('/kegiatan/jenis-kegiatan');
    }

    public function edit_jenis($id){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'kegiatan/jenis';

        $jenis_kegiatan = Jenis_kegiatan::find($id);

        return view('backend.kegiatan.edit_jenis_kegiatan',compact('login', 'login_id', 'admin','jenis_kegiatan','menu'));
    }

    public function update_jenis($id, Request $request){

        $this->validate($request,[
            'nama_jenis' => 'required',
        ]);

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $admin = Anggota::where('nama','=', $login)->first();

        $jenis_kegiatan = Jenis_kegiatan::find($id);
        $jenis_kegiatan->nama_jenis = $request->nama_jenis;
        $jenis_kegiatan->created_by = $admin->id;
        $jenis_kegiatan->save();

        Session::flash('edit', 'Data '. $request->nama_jenis .' telah berhasil diedit!');
        return redirect('/kegiatan/jenis-kegiatan');
    }

    public function hapus_jenis($id){

        $jenis_kegiatan = Jenis_kegiatan::find($id);
        $jenis_kegiatan->delete();

        Session::flash('hapus', 'Data '. $jenis_kegiatan->nama_jenis .' telah berhasil dihapus!');
        return redirect('/kegiatan/jenis-kegiatan');
    }

    public function cetak_pdf()
    {
        $kegiatan = Kegiatan::all();
        $pdf = PDF::loadview('backend.kegiatan.kegiatan_pdf',['kegiatan'=>$kegiatan]);
        return $pdf->download('kegiatan-pdf');
    }

    public function export_excel()
    {
        return Excel::download(new KegiatanExport, 'kegiatan.xlsx');
    }

}
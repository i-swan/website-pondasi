<?php
 
namespace App\Http\Controllers;

use Session;
use File;
use PDF;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Anggota;
use App\Donasi;
use App\Jenis_rekening;
use App\Exports\DonasiExport;
use App\Imports\DonasiImport;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class DonasiController extends Controller
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
        $menu = 'donasi';

        $donasi = Donasi::orderBy('id','desc')->paginate(10);

        return view('backend.donasi.index', compact('login', 'login_id','admin','donasi','menu'));
    }

    public function detail($id){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'donasi/detail';

        $donasi = Donasi::findOrFail($id);

        return view('backend.donasi.detail', compact('login', 'login_id','admin','donasi','menu'));
    }

    public function tambah(){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'donasi';

        $anggota = Anggota::all();
        $jenis_rekening = Jenis_rekening::all();

        return view('backend.donasi.tambah', compact('login', 'login_id','admin','menu','jenis_rekening', 'anggota'));
    }

    public function simpan(Request $request){

        $this->validate($request,[
            'no_rek_asal' => 'required',
            'nama' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
            'file_foto' => 'required',
            'rekening_id' => 'required',
        ]);

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $admin = Anggota::where('nama','=', $login)->first();

        $file_foto = $request->file('file_foto');
        $nama_file = time()."_".$file_foto->getClientOriginalName();
        $tujuan_upload = 'foto_donasi';
        $file_foto->move($tujuan_upload,$nama_file);
 
        Donasi::create([
            'no_rek_asal' => $request->no_rek_asal,
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan,
            'file_foto' => $nama_file,
            'rekening_id' => $request->rekening_id,
            'created_by' => $admin->id,
        ]);

        Session::flash('tambah', 'Data telah berhasil disimpan!');
        return redirect('/donasi');
    }

    public function edit($id, Request $request){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'donasi';

        $anggota = Anggota::all();
        $donasi = Donasi::find($id);
        $jenis_rekening = Jenis_rekening::all();
        $tipe_hal = $request->tipe_hal;

        return view('backend.donasi.edit', compact('login', 'login_id','admin','donasi', 'jenis_rekening', 'menu', 'anggota','tipe_hal'));
    }

    public function update($id, Request $request){

        $this->validate($request,[
            'no_rek_asal' => 'required',
            'nama' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
            'rekening_id' => 'required',
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
            $tujuan_upload = 'foto_donasi';
            $file_foto->move($tujuan_upload,$nama_file);
        }

        $donasi = Donasi::find($id);
        $donasi->no_rek_asal = $request->no_rek_asal;
        $donasi->nama = $request->nama;
        $donasi->jumlah = $request->jumlah;
        $donasi->tanggal = $request->tanggal;
        $donasi->keterangan = $request->keterangan;
        $donasi->file_foto = $nama_file;
        $donasi->rekening_id = $request->rekening_id;
        $donasi->created_by = $admin->id;
        $donasi->save();

        Session::flash('edit', 'Data telah berhasil diedit!');
        if($request->tipe_hal == 'detail'){
            return redirect('/donasi/detail/'.$donasi->id);
        }else{
            return redirect('/donasi');
        }
    }

    public function hapus($id){

        $donasi = Donasi::find($id);
        $donasi->delete();
        Session::flash('hapus', 'Data telah berhasil dihapus!');

        return back();
    }

    public function recycle_bin(){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'donasi/recycle_bin';

        $donasi = Donasi::onlyTrashed()->orderBy('id','desc')->paginate(10);

        return view('backend.donasi.recycle_bin', compact('login', 'login_id','admin','donasi','menu'));
    }

    public function restore($id){

        $donasi = Donasi::onlyTrashed()->where('id', $id);
        $donasi->restore();
        Session::flash('restore', 'Data telah berhasil direstore!');

        return back();
    }

    public function hapus_permanen($id){

        $donasi = Donasi::onlyTrashed()->where('id', $id);
        $donasi->forceDelete();
        Session::flash('hapus_permanen', 'Data telah berhasil dihapus secara permanen!');

        return redirect('/donasi/recycle-bin');
    }

    public function jenis(){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'donasi/jenis';

        $jenis_rekening = Jenis_rekening::all();

        return view('backend.donasi.jenis', compact('login', 'login_id','admin','jenis_rekening','menu'));
    }

    public function tambah_jenis(){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'donasi/jenis';

        return view('backend.donasi.tambah_jenis_rekening', compact('login', 'login_id','admin','menu'));
    }

    public function simpan_jenis(Request $request){

        $this->validate($request,[
            'bank' => 'required',
            'no_rek' => 'required',
            'nama' => 'required',
        ]);

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $admin = Anggota::where('nama','=', $login)->first();
 
        Jenis_rekening::create([
            'bank' => $request->bank,
            'no_rek' => $request->no_rek,
            'nama' => $request->nama,
            'created_by' => $admin->id,
        ]);

        Session::flash('tambah', 'Rekening a.n '. $request->nama .' telah berhasil disimpan!');
        return redirect('/donasi/jenis-rekening');
    }

    public function edit_jenis($id){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'donasi/jenis';
        $jenis_rekening = Jenis_rekening::find($id);

        return view('backend.donasi.edit_jenis_rekening', compact('login', 'login_id','admin','jenis_rekening','menu'));
    }

    public function update_jenis($id, Request $request){

        $this->validate($request,[
            'bank' => 'required',
            'no_rek' => 'required',
            'nama' => 'required',
        ]);

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $admin = Anggota::where('nama','=', $login)->first();

        $jenis_rekening = Jenis_rekening::find($id);
        $jenis_rekening->bank = $request->bank;
        $jenis_rekening->no_rek = $request->no_rek;
        $jenis_rekening->nama = $request->nama;
        $jenis_rekening->created_by = $admin->id;
        $jenis_rekening->save();

        Session::flash('edit', 'Rekening a.n '. $request->nama .' telah berhasil diedit!');
        return redirect('/donasi/jenis-rekening');
    }

    public function hapus_jenis($id){

        $jenis_rekening = Jenis_rekening::find($id);
        $jenis_rekening->delete();

        Session::flash('hapus', 'Rekening a.n '. $jenis_rekening->nama .' telah berhasil dihapus!');
        return redirect('/donasi/jenis-rekening');
    }

    public function cetak_pdf()
    {
        $donasi = Donasi::all();
        $pdf = PDF::loadview('backend.donasi.donasi_pdf',['donasi'=>$donasi]);
        return $pdf->download('donasi-pdf');
    }

    public function export_excel()
    {
        return Excel::download(new DonasiExport, 'donasi.xlsx');
    }

}
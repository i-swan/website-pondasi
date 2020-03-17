<?php
 
namespace App\Http\Controllers;
 
use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\About;
use App\Anggota;
use App\Donasi;
use App\Jenis_rekening;
use App\Kegiatan;
use App\Jenis_kegiatan;
use App\Prestasi;
use App\Jenis_prestasi;
use App\User;

class AdminController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function admin_credential_rules(array $data)
    {
      $messages = [
        'current-password.required' => 'Masukkan password saat ini',
        'password.required' => 'Masukkan password baru',
        'password_confirmation.required' => 'Masukkan password konfirmasi ini',
        'password_confirmation.same' => 'Password konfirmasi harus sama dengan password baru', 
      ];

      $validator = Validator::make($data, [
        'current-password' => 'required',
        'password' => 'required|same:password',
        'password_confirmation' => 'required|same:password',     
      ], $messages);

      return $validator;
    }

    public function admin(){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'dashboard';

        $anggota = Anggota::count();
        $donasi = Donasi::count();
        $kegiatan = Kegiatan::count();
        $prestasi = Prestasi::count();

        $anggota_latest = Anggota::orderBy('id','desc')->take(3)->get();
        $kegiatan_latest = Kegiatan::orderBy('id','desc')->take(3)->get();
        $prestasi_latest = Prestasi::orderBy('id','desc')->take(3)->get();
        $donasi_latest = Donasi::orderBy('id','desc')->take(3)->get();

        $profil = About::where('tipe','=','profil')->get();
        $visi = About::where('tipe','=','visi')->get();
        $misi = About::where('tipe','=','misi')->get();
        $data =[
            'profil' => $profil,
            'visi' => $visi,
            'misi' => $misi
        ];

    	return view('backend.admin', compact('login', 'login_id', 'admin', 'data', 'menu', 'anggota', 'anggota_latest','kegiatan', 'kegiatan_latest','prestasi', 'prestasi_latest','donasi', 'donasi_latest'));
    }

    public function tambah(){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'dashboard';

        return view('backend.tambah_profil_visi_misi', compact('login', 'login_id', 'admin', 'menu'));
    }

    public function simpan(Request $request){

        $this->validate($request,[
            'about' => 'required',
            'tipe' => 'required',
        ]);
 
        About::create([
            'about' => $request->about,
            'tipe' => $request->tipe,
        ]);

        Session::flash('tambah', 'Data '. $request->tipe .' telah berhasil disimpan!');
        return redirect('/admin');
    }

    public function edit($id){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'dashboard';

        $about = About::find($id);

        return view('backend.edit_profil_visi_misi', compact('login', 'login_id', 'admin', 'about', 'menu'));
    }

    public function update($id, Request $request){

        $this->validate($request,[
            'about' => 'required',
            'tipe' => 'required',
        ]);

        $about = About::find($id);
        $about->about = $request->about;
        $about->tipe = $request->tipe;
        $about->save();

        Session::flash('edit', 'Data '. $request->tipe .' telah berhasil diedit!');
        return redirect('/admin');
    }

    public function hapus($id){

        $about = About::find($id);
        $about->delete();

        Session::flash('hapus', 'Data '. $about->tipe .' telah berhasil dihapus!');
        return redirect('/admin');
    }

    public function akun(){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'all-akun';

        $user = User::all();
        $anggota = Anggota::all();

        return view('backend.akun.index', compact('login', 'login_id', 'admin', 'menu','user','anggota'));
    }

    public function tambah_akun(){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'all-akun';

        $anggota = Anggota::all();

        return view('backend.akun.tambah_akun', compact('login', 'login_id', 'admin', 'anggota', 'menu'));
    }

    public function simpan_akun(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'password' => 'required',
        ]);

        $anggota = Anggota::where('id', $request->name)->first();
 
        User::create([
            'name' => $anggota->nama,
            'email' => $anggota->email,
            'password' => Hash::make($request->password),
        ]);

        Session::flash('tambah', 'Data telah berhasil disimpan!');
        return redirect('/admin/akun');
    }

    public function edit_akun($id){

        $login = auth()->user()->name;
        $login_id = auth()->user()->id;
        $admin = Anggota::where('nama','=', $login)->first();
        $menu = 'all-akun';

        $anggota = Anggota::all();
        $user = User::find($id);

        return view('backend.akun.edit_akun', compact('login', 'login_id', 'admin', 'anggota' ,'user', 'menu'));
    }

    public function update_akun($id, Request $request){

          if(Auth::Check())
          {
            $request_data = $request->All();
            $validator = $this->admin_credential_rules($request_data);
            $user_id = Auth::User()->id;
            $login = auth()->user()->name;
            $login_id = auth()->user()->id;
            $admin = Anggota::where('nama','=', $login)->first();

            if($validator->fails())
            {
                Session::flash('full', $validator->getMessageBag());
                return redirect('/admin/edit/akun/'.$user_id); 
            }
            else
            {  
              $current_password = Auth::User()->password;           
              if(Hash::check($request_data['current-password'], $current_password))
              {                        
                $obj_user = User::find($user_id);
                $obj_user->password = Hash::make($request_data['password']);;
                $obj_user->save(); 

                Session::flash('edit_akun', 'Data telah berhasil diedit!');
                if($admin->status != 'pengurus'){
                   return redirect('/admin'); 
                }
                return redirect('/admin/akun');
              }
              else
              { 
                Session::flash('wrong_password', 'Please enter correct current password!');
                return redirect('/admin/edit/akun/'.$user_id);  
              }
            }        
          }
          else
          {
            return redirect()->to('/');
          }    

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
        ]);

        $user = User::find($id);
        $about->name = $request->name;
        $about->email = $request->email;
        $about->password = $request->password;
        $about->save();

        Session::flash('edit', 'Data telah berhasil diedit!');
        return redirect('/admin/akun');
    }

    public function hapus_akun($id){

        $user = User::find($id);
        $user->delete();

        Session::flash('hapus', 'Data telah berhasil dihapus!');
        return redirect('/admin/akun');
    }
}
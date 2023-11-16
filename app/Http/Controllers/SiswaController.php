<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        $m = new siswa();
        return view('index');
    }
    public function loginsiswa(){
        $m = new siswa();
        return view('siswa.loginsiswa');
    }
    public function register(){
        $m = new siswa();
        return view('siswa.register');
    }
    public function simpan (Request $request){
        $c = new siswa();
        $cek= $request->validate([
            'nisn'=>'required|unique:masyarakat|max:10',
            'nis'=>'required',
            'nama'=>'required',
            'username'=>'required|min:3',
            'password'=>'required|min:3',
            'alamat'=>'required|min:3',
            'telp'=>'required|max:13'
        ]);
        $c->create( $request->all());
        return redirect('login')->with('Pesan','anda berhasil registrasi');
    }
    public function ceklogin1(Request $request){
        $m = new siswa();
        //cek username dan password
        if($m->where('Username',$request->input('Username'))->where('Password',$request->input('Password'))->exists()){
            session(['username'=> $request->input('Username')]);
            return redirect('/');
        }
        return back()->with('Pesan','Username dan Password tidak terdaftar');
        
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\siswa;
use App\Models\spp;
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
    public function ceksiswa(Request $request){
        $m = new siswa();
        //cek username dan password
        if($m->where('nisn',$request->input('nisn'))->exists()){
            session(['username'=> $request->input('Username')]);
            return redirect('index');
        }
        return back()->with('Pesan','Username dan Password tidak terdaftar');
        
    }
    public function siswa(){
        $cek = new siswa;
        return view("siswa.siswa",['data'=>$cek->all()]);
    }
    public function tambahs(){
        $k = new kelas();
        $s = new spp();
        return view("siswa.tambahsiswa",['datakelas'=>$k->all(),'dataspp'=>$s->all()]);
    }
    public function tambahsiswa(Request $request){
        $k =new siswa;
        $k->create([
            'nisn'=>$request->input('nisn'),
            'nis'=>$request->input('nis'),
            'nama'=>$request->input('nama'),
            'id_kelas'=>$request->input('id_kelas'),
            'alamat'=>$request->input('alamat'),
            'no_telp'=>$request->input('no_telp'),
            'id_spp'=>$request->input('id_spp')
            
        ]);
        return redirect('siswa')->with('pesan','data berhasil ditambahkan');
        
    }
    public function edits($id){
        $e = siswa::select('*')->where('nisn',$id)->get();
        $k = new kelas();
        $s = new spp();
            return view('siswa.editsiswa',['data'=>$e,'datakelas'=>$k->all(),'dataspp'=>$s->all()]);
            
    }
    public function editsiswa(Request $request ,$id){
        $e = siswa::where('nisn',$id)->update([
            'nisn'=>$request->nisn,
            'nis'=>$request->nis,
            'nama'=>$request->nama,
            'id_kelas'=>$request->id_kelas,
            'alamat'=>$request->alamat,
            'no_telp'=>$request->no_telp,
            'id_spp'=>$request->id_spp
            
        ]);
        return redirect('siswa')->with('pesan','data berhasil diedit');
    }
    public function hapussiswa($id){
        $e = siswa::where('nisn',$id)->delete();
        return back();
    }
    public function datasiswa(){
        $oh = new siswa();
        return view('siswa.datasiswa',['asep1'=>$oh->all()]);
    }
}
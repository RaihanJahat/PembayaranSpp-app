<?php

namespace App\Http\Controllers;

use App\Models\petugas;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function logout(){
        session()->flush();
        return redirect('login');
    }
    public function loginpetugas()
    {
        return view("petugas.loginpetugas");
    }
    public function ceklogin(Request $request)
    {
        $cek = new petugas();
        $cek = $cek->where('username', $request->input('username'))->where('password', $request->input('password'));
        if ($cek->exists()) {
            session([
                'username' => $request->input('username'),
                'password' => ($request->input('password'))
            ]);
            return redirect('utama');
        }
    }
}

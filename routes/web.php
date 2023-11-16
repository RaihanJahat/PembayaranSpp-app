<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('login', function () {
    return view('siswa.loginsiswa');
});
Route::get('regis', function () {
    return view('siswa.register');
});
//siswa
Route::get('index',[SiswaController::class,'index']);
Route::get('login',[SiswaController::class,'loginsiswa']);
Route::post('login',[SiswaController::class,'ceklogin']);
Route::get('regis',[SiswaController::class,'register']);
Route::post('Simpan',[SiswaController::class,'simpan']);

//petugas
Route::get('datapetugas', function(){
    return view('petugas.datapetugas');
});
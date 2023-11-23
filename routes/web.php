<?php

use App\Http\Controllers\AdminController;
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

Route::get('/', function (){
return view('index');
    });

Route::get('login', function (){
return view('siswa.loginsiswa');
    });
Route::get('regis', function (){
return view('siswa.register');
    });
        //siswa
        Route::get('index',[SiswaController::class,'index']);
        Route::get('regis',[SiswaController::class,'register']);
        Route::post('Simpan',[SiswaController::class,'simpan']);
        route::get('siswa',[SiswaController::class,'siswa']);
Route::get('tambahsiswa',[SiswaController::class,'tambahs']);
Route::post('tambahsiswa',[SiswaController::class,'tambahsiswa']);
Route::get('editsiswa/{id}',[SiswaController::class,'edits']);
Route::post('editsiswa/{id}',[SiswaController::class,'editsiswa']);
Route::get('hapussiswa/{id}',[SiswaController::class,'hapussiswa']);

        //crud
Route::get('datapetugas', function(){
return view('petugas.datapetugas');
    });
Route::get('datasiswa', function(){
return view('siswa.datasiswa');
    });
Route::get('datakelas', function(){
return view('kelas.datakelas');
    });
Route::get('dataspp', function(){
return view('spp.dataspp');
    });




        //logout
        Route::get('logout',[AdminController::class,'logout']);
        Route::get('loginpetugas',[AdminController::class,'loginpetugas']);
        Route::post('loginpetugas',[AdminController::class,'cekpetugas']);
        Route::get('loginsiswa',[SiswaController::class,'loginsiswa']);
        Route::post('loginsiswa',[SiswaController::class,'ceksiswa']);


        //button
        Route::get('tambah',[SiswaController::class,'tambah']);
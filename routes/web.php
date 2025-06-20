<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TryController ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiDBController ;
use App\Http\Controllers\sepedamotorDBCont ;
use App\Http\Controllers\pagecounterController ;
use App\Http\Controllers\keranjangbelanjaController ;
use App\Http\Controllers\counterController ;
use App\Http\Controllers\newkaryawanController ;
use Illuminate\Support\Facades\DB;

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
    return view('welcome');
});

Route::get('bootstrap1', function () {
    return view('bootstrap1');
});

Route::get('bootstrap2', function () {
    return view('bootstrap2');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/pertama', function(){
    return view('pertama');
});

Route::get('/linktree', function(){
    return view('linktree');
});

Route::get('/page', function() {
    return view('page');
});

Route::get('/index', function(){
    return view('index');
});

Route::get('/landtest', function(){
    return view('landtest');
});

Route::get('/halo', function () {
    return "<h1> Lokasi baru: banyumuani</h1>";
});

Route::get('dosen', [TryController::class, 'biodata']);

//route pegawai
// Route::get('pegawai/{nama}', [PegawaiController::class, 'index']);

//route formulir
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// route blog
Route::get('/blog', [BlogController::class,'home']);
Route::get('/blog/tentang', [BlogController::class,'tentang']);
Route::get('/blog/kontak', [BlogController::class,'kontak']);

//Route PegawaiDBController
//read
Route::get('/pegawai',[PegawaiDBController::class,'indexpegawai']);
//create
Route::get('/pegawai/tambah',[PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
//update
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class,'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
//delete
Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class, 'hapus']);

//crud ahh
Route::get('/pegawai',[PegawaiDBController::class,'indexpegawai']);
Route::get('pegawai/cari', [PegawaiDBController::class, 'cari']);


// Router sepedamotorDBCont
Route::get('/sepedamotor',[sepedamotorDBCont::class,'indexsepedamotor']);
// Create
Route::get('/sepedamotor/tambahmotor',[sepedamotorDBCont::class,'tambah']);
Route::post('/sepedamotor/store',[sepedamotorDBCont::class,'store']);
// Update
Route::get('/sepedamotor/edit/{id}',[sepedamotorDBCont::class,'edit']);
Route::post('/sepedamotor/update',[sepedamotorDBCont::class,'update']);
// Delete
Route::get('/sepedamotor/hapus/{id}',[sepedamotorDBCont::class, 'hapus']);
// Read
Route::get('/sepedamotor/cari', [sepedamotorDBCont::class, 'cari']);


// Router pagecounter
Route::get('/pagecounter', [pagecounterController::class, 'show']);

// Route keranjangbelanja
Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'index']);
Route::get('/keranjangbelanja/beli', [KeranjangBelanjaController::class, 'beli']);
Route::post('/keranjangbelanja/store', [KeranjangBelanjaController::class, 'store']);
Route::get('/keranjangbelanja/hapus/{ID}', [KeranjangBelanjaController::class, 'hapus']);

// Route karyawan
# Week 15
Route::get('/karyawan', [karyawanController::class, 'index']);
Route::get('/karyawan/tambah', [karyawanController::class, 'tambah']);
Route::post('/karyawan/store', [karyawanController::class, 'store']);
Route::get('/karyawan/edit/{kp}', [karyawanController::class, 'edit']);
Route::post('/karyawan/update', [karyawanController::class, 'update']);
Route::get('/karyawan/hapus/{kp}', [karyawanController::class, 'hapus']);

// Route counter latihan
Route::get('/counter',[counterController::class, 'counter']);

// Route mhs latihan
Route::get('/mhs',[mhs::class, 'index']);
Route::get('/mhs/tambah', [mhs::class, 'tambah']);
Route::post('/mhs/store', [mhs::class, 'store']);
Route::get('/mhs/edit/{kp}', [mhs::class, 'edit']);
Route::post('/mhs/update', [mhs::class, 'update']);
Route::get('/mhs/hapus/{kp}', [mhs::class, 'hapus']);


// ROUTE EAS
Route::get('/eas',[newkaryawanController::class, 'index']);
Route::get('/eas/tambah', [newkaryawanController::class, 'tambah']);
Route::post('/eas/store', [newkaryawanController::class, 'store']);
// Route::get('/eas/edit/{kp}', [mhs::class, 'edit']);
// Route::post('/eas/update', [mhs::class, 'update']);
Route::get('/eas/hapus/{nk}', [newkaryawanController::class, 'hapus']);

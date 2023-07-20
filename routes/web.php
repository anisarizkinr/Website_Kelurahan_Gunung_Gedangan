<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\GeografisController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\PotensiWilayahController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\VidioController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PencapaianController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.beranda');
});
Route::get('/beranda ',[UserController::class, 'beranda']);
Route::get('/layanan ',[LayananController::class, 'layanan']);
Route::get('/pencapaian ',[PencapaianController::class, 'pencapaian']);
  
  

Route::get('/', function () {
    return view('user.beranda');
});
Route::get('/beranda ',[UserController::class, 'beranda']);
Route::prefix('profil')->group(function () {
   
    Route::get('/visi',[VisiController::class, 'visi']);
    Route::get('/geografis',[GeografisController::class, 'geografis']);
    Route::get('/struktur',[StrukturController::class, 'struktur']);
    Route::get('/potensiwilayah',[PotensiWilayahController::class, 'potensiwilayah']);
    
});

Route::get('/', function () {
    return view('user.beranda');
});
Route::get('/beranda ',[UserController::class, 'beranda']);
Route::prefix('informasi')->group(function () {
   
    Route::get('/kegiatan',[KegiatanController::class, 'kegiatan']);
    Route::get('/pengumuman',[PengumumanController::class, 'pengumuman']);
    Route::get('/galeri',[GaleriController::class, 'galeri']);
    Route::get('/vidio',[VidioController::class, 'vidio']);
    Route::get('/download',[DownloadController::class, 'download']);
});






  
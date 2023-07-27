<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\GeografisController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\PotensiWilayahController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\VidioController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PencapaianController;
use App\Http\Controllers\DataController;

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
Route::get('/data ',[DataController::class, 'data']);
  
  

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
   
    Route::get('/berita',[BeritaController::class, 'berita']);
    Route::get('/galeri',[GaleriController::class, 'galeri']);
 
});






  
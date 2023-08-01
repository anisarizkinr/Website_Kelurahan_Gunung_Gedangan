<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\GeografisController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\DashboardController;


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
// Route::get('/layanan ',[LayananController::class, 'layanan']);
Route::get('/pencapaian ',[PencapaianController::class, 'pencapaian']);
Route::get('/data ',[DataController::class, 'data']);
  
  

Route::get('/', function () {
    return view('user.beranda');
});
Route::get('/beranda ',[UserController::class, 'beranda']);
Route::prefix('profil')->group(function () {
   
    Route::get('/sejarah',[SejarahController::class, 'sejarah']);
    Route::get('/visi',[VisiController::class, 'visi']);
    Route::get('/geografis',[GeografisController::class, 'geografis']);
    Route::get('/struktur',[StrukturController::class, 'struktur']);
  
    
});



Route::get('/beranda ',[UserController::class, 'beranda']);
Route::prefix('informasi')->group(function () {
   
    Route::get('/berita',[BeritaController::class, 'berita']);
    Route::get('/galeri',[GaleriController::class, 'galeri']);
 
});


Route::prefix('layanan')->group(function () {
    Route::get('/p_ahliwaris',[LayananController::class, 'p_ahliwaris']);
    Route::get('/p_nikah',[LayananController::class, 'p_nikah']);
    Route::get('/p_keterangan_usaha',[LayananController::class, 'p_keterangan_usaha']);
    Route::get('/p_skck',[LayananController::class, 'p_skck']);
    Route::get('/p_keterangan_tidakmampu',[LayananController::class, 'p_keterangan_tidakmampu']);
    Route::get('/p_keterangan_bedaidentitas',[LayananController::class, 'p_keterangan_bedaidentitas']);
    Route::get('/p_keterangan_domisili',[LayananController::class, 'p_keterangan_domisili']);
 
});

Route::get('/dashboard ',[DashboardController::class, 'dashboard']);

  
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('galeri', GaleriController::class);

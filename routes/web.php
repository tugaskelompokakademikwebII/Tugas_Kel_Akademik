<?php
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\AdministrasiController;
use App\Models\Siswa;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function () {
    Route::resource('Guru',GuruController::class);
});
Route::get('Guru/laporan/cetak',[GuruController::class,'laporan']);
Route::resource('Siswa',SiswaController::class);
Route::get('Siswa/laporan/cetak',[SiswaController::class,'laporan']);
Route::resource('Mapel',MapelController::class);
Route::get('Mapel/laporan/cetak',[MapelController::class,'laporan']);
Route::resource('Administrasi',AdministrasiController::class);
Route::get('Administrasi/laporan/cetak',[AdministrasiController::class,'laporan']);
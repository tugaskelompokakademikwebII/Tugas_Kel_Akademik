<?php
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\AdministrasiController;
use App\Http\Controllers\NilaiController;
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
Route::get('/Profile', function () {
    return view('profile');
});
Route::get('/', [SiswaController::class, 'registrasi']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function () {
    Route::resource('Guru',GuruController::class);
});
Route::get('Guru/laporan/cetak',[GuruController::class,'laporan']);
Route::get('Guru/cari/data',[GuruController::class,'cari']);
Route::resource('Siswa',SiswaController::class);
Route::get('Siswa/laporan/cetak',[SiswaController::class,'laporan']);
Route::get('Siswa/cari/data',[SiswaController::class,'cari']);
Route::resource('Mapel',MapelController::class);
Route::get('Mapel/laporan/cetak',[MapelController::class,'laporan']);
Route::get('Mapel/cari/data',[MapelController::class,'cari']);
Route::resource('Administrasi',AdministrasiController::class);
Route::get('Administrasi/laporan/cetak',[AdministrasiController::class,'laporan']);
Route::get('Administrasi/cari/data',[AdministrasiController::class,'cari']);

Route::resource('Nilai', NilaiController::class);
Route::post('Nilai', [NilaiController::class, 'store'])->name('nilai.store');
Route::post('Nilai', [NilaiController::class, 'index'])->name('nilai_index');


Route::get('Siswa/laporan/{siswa_id}', [NilaiController::class, 'laporan'])->name('laporan.nilai');
Route::get('Nilai/Siswa/laporan/semua', [NilaiController::class, 'laporanSemua'])->name('laporan.semua');









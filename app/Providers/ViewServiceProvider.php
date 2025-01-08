<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Siswa;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Menggunakan View Composer untuk view tertentu
        View::composer('laporan_nilai', function ($view) {
            // Ambil siswa_id dari request
            $siswa_id = request()->route('siswa_id');

            // Ambil data siswa berdasarkan ID
            $siswa = Siswa::with(['nilais.mapels'])->find($siswa_id);

            // Kirim data siswa ke view
            $view->with('siswa', $siswa);
        });
    }

    public function register()
    {
        //
    }
}
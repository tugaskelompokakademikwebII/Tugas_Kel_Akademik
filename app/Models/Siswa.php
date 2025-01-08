<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable =['kode_siswa', 'nama_siswa', 'alamat_siswa', 'nomorhp_siswa', 'jk', 'tanggal_lahir'];


    public function administrasis()
    {
        return $this->hasMany(Administrasi::class, 'siswa_id');
    }
    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'siswa_id');
    }
    public function nilais()
    {
        return $this->hasMany(Nilai::class, 'siswa_id');
    }



}

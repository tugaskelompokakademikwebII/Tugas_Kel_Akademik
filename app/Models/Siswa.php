<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = ['nama_siswa', 'alamat', 'telepon'];

    public function administrasis()
    {
        return $this->hasMany(Administrasi::class, 'siswa_id');
    }
}

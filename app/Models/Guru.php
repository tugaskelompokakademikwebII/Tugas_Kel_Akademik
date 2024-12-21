<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $fillable = ['kode_guru', 'nama_guru', 'bidang'];

    // Relasi ke tabel Administrasi
    public function administrasis()
    {
        return $this->hasMany(Administrasi::class, 'guru_id');
    }
}

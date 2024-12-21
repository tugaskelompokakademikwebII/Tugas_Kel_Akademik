<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $fillable = ['kode_mp', 'nama_mp', 'jadwal','kelas'];

    public function administrasis()
    {
        return $this->hasMany(Administrasi::class, 'mapel_id');
    }
}

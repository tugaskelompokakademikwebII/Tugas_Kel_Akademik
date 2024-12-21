<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Administrasi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $dates =['tanggal'];
  
    public function Guru()
    {
        return $this->belongsTo('App\Models\Guru', 'guru_id');
    }
    

    // Relasi ke tabel Pasien
    public function siswa():BelongsTo
    {
        return $this->belongsTo('App\Models\Siswa')->withDefault();
    }
    public function mapel():BelongsTo
    {
        return $this->belongsTo('App\Models\Mapel')->withDefault();
    }
  
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KegiatanAnak extends Model
{
    use HasFactory;

    protected $table = 'kegiatan_anak';

    protected $fillable = [
        'nama_kegiatan',
        'jam_mulai',
    ];

    public function absensi()
    {
        return $this->hasMany(AbsensiAnak::class, 'kegiatan_anak_id');
    }
}

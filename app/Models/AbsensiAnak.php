<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AbsensiAnak extends Model
{
    use HasFactory;

    protected $table = 'absensi_anak';

    protected $fillable = [
        'anak_asuh_id',
        'kegiatan_anak_id',
        'user_id',
        'tanggal',
        'waktu_absen',
        'status_kehadiran',
        'keterangan',
    ];

    public function anakAsuh()
    {
        return $this->belongsTo(AnakAsuh::class);
    }

    public function kegiatan()
    {
        return $this->belongsTo(KegiatanAnak::class, 'kegiatan_anak_id');
    }

    public function pengurus()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnakAsuh extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'anak_asuh';

    protected $fillable = [
        'nomor_induk',
        'nama_lengkap',
        'jenis_kelamin',
        'tanggal_lahir',
        'status_anak',
        'tanggal_masuk',
        'status_aktif',
    ];

    public function absensi()
    {
        return $this->hasMany(AbsensiAnak::class);
    }
}

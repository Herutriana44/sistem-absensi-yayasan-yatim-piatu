<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PengajuanIzin extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_izin';

    protected $fillable = [
        'tipe_pendaftar',
        'subjek_id',
        'tanggal_mulai',
        'tanggal_selesai',
        'alasan',
        'bukti_dokumen',
        'status_persetujuan',
    ];
}

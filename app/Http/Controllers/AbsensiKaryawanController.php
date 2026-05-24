<?php

namespace App\Http\Controllers;

use App\Models\AbsensiKaryawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbsensiKaryawanController extends Controller
{
    public function storeMasuk(Request $request)
    {
        AbsensiKaryawan::create([
            'karyawan_id' => Auth::user()->karyawan->id,
            'tanggal' => date('Y-m-d'),
            'jam_masuk' => date('H:i:s'),
            'status_kehadiran' => 'Hadir',
        ]);

        return back()->with('success', 'Berhasil absen masuk');
    }

    public function storePulang(Request $request)
    {
        $absen = AbsensiKaryawan::where('karyawan_id', Auth::user()->karyawan->id)
            ->where('tanggal', date('Y-m-d'))
            ->first();

        if ($absen) {
            $absen->update(['jam_pulang' => date('H:i:s')]);
            return back()->with('success', 'Berhasil absen pulang');
        }

        return back()->with('error', 'Belum melakukan absen masuk');
    }
}

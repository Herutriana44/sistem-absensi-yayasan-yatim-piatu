<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\AnakAsuh;
use App\Models\AbsensiKaryawan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'total_karyawan' => Karyawan::count(),
            'total_anak' => AnakAsuh::count(),
            'absensi_hari_ini' => AbsensiKaryawan::where('tanggal', date('Y-m-d'))->count(),
        ];

        return view('dashboard', $data);
    }
}

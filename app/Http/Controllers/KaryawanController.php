<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('karyawan.index', compact('karyawan'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required',
            'nip' => 'required|unique:karyawan',
            'jabatan' => 'required',
            'jenis_kelamin' => 'required|in:L,P',
            'no_hp' => 'required',
        ]);

        Karyawan::create($validated);
        return back()->with('success', 'Karyawan berhasil ditambahkan');
    }
}

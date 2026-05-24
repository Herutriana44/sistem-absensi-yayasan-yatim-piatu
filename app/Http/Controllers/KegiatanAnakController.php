<?php

namespace App\Http\Controllers;

use App\Models\KegiatanAnak;
use Illuminate\Http\Request;

class KegiatanAnakController extends Controller
{
    public function index()
    {
        $kegiatan = KegiatanAnak::all();
        return view('kegiatan.index', compact('kegiatan'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kegiatan' => 'required',
            'jam_mulai' => 'required',
        ]);

        KegiatanAnak::create($validated);
        return back()->with('success', 'Kegiatan berhasil ditambahkan');
    }
}

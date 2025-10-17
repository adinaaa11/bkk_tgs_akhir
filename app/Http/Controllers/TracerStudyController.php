<?php

namespace App\Http\Controllers;

use App\Models\TracerStudy;
use Illuminate\Http\Request;

class TracerStudyController extends Controller
{
    // Menampilkan form & data tracer study
    public function index()
{
    $tracers = TracerStudy::latest()->paginate(6);
    return view('informasi.tracer-study', compact('tracers'));
}


    // Menyimpan hasil input user
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tahun_lulus' => 'required|string|max:4',
            'pekerjaan' => 'nullable|string|max:255',
            'perusahaan' => 'nullable|string|max:255',
            'jabatan' => 'nullable|string|max:255',
            'kesan' => 'nullable|string',
        ]);

        TracerStudy::create($request->all());

        return redirect()->back()->with('success', 'Terima kasih! Data tracer study kamu berhasil dikirim.');
    }
}

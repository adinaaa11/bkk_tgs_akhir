<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    // Menampilkan semua testimoni + form tambah
    public function index()
    {
        $testimonis = Testimoni::latest()->paginate(6);
        return view('informasi.testimoni', compact('testimonis'));
    }

    // Simpan testimoni dari form user
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'posisi' => 'nullable|string|max:255',
            'isi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('testimoni', 'public');
        }

        Testimoni::create([
            'nama' => $request->nama,
            'posisi' => $request->posisi,
            'isi' => $request->isi,
            'foto' => $path,
        ]);

        return redirect()->back()->with('success', 'Terima kasih! Testimoni kamu telah dikirim.');
    }
}

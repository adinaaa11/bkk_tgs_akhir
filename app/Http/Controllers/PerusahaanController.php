<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    // Menampilkan daftar perusahaan
    public function index(Request $request)
    {
        $query = Perusahaan::query();

        // Fitur pencarian
        if ($request->filled('search')) {
            $query->where('nama', 'like', '%' . $request->search . '%')
                  ->orWhere('alamat', 'like', '%' . $request->search . '%');
        }

        // Fitur filter kategori
        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }

        // Ambil data unik kategori dari database
        $kategori = Perusahaan::select('kategori')
                    ->distinct()
                    ->pluck('kategori')
                    ->filter() // hilangkan null
                    ->toArray();

        // Tambahan kategori perusahaan dalam negeri
        $kategoriDefault = [
            'Telkom Indonesia',
            'Toyota Astra Motor',
            'Bank Mandiri',
            'Pertamina',
            'Garuda Indonesia',
            'Indofood',
            'Bukalapak',
            'Tokopedia',
            'Shopee Indonesia',
            'Gojek',
        ];

        $kategori = array_unique(array_merge($kategoriDefault, $kategori));

        // Ambil data perusahaan terbaru
        $perusahaans = $query->latest()->paginate(6);

        return view('perusahaan.index', compact('perusahaans', 'kategori'));
    }

    // Menampilkan detail perusahaan
    public function show(Perusahaan $perusahaan)
    {
        return view('perusahaan.show', compact('perusahaan'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // Halaman daftar berita
   public function index()
{
    $beritas = Berita::latest()->paginate(6);
    return view('informasi.berita', compact('beritas'));
}

public function show($id)
{
    $berita = Berita::findOrFail($id);
    return view('informasi.detail-berita', compact('berita'));
}

}
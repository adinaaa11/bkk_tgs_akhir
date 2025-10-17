<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    // Halaman daftar pengumuman
    public function index()
    {
        $pengumumans = Pengumuman::latest()->paginate(6);
        return view('informasi.pengumuman', compact('pengumumans'));
    }

    // Halaman detail pengumuman
    public function show(Pengumuman $pengumuman)
    {
        return view('informasi.detail_pengumuman', compact('pengumuman'));
    }
}

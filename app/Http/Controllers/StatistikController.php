<?php

namespace App\Http\Controllers;

use App\Models\TracerStudy;
use Illuminate\Http\Request;

class StatistikController extends Controller
{
    public function index()
    {
        // Grafik 1: Jumlah Alumni per Tahun
        $alumniPerTahun = TracerStudy::selectRaw('tahun_lulus, COUNT(*) as total')
            ->groupBy('tahun_lulus')
            ->orderBy('tahun_lulus', 'asc')
            ->pluck('total', 'tahun_lulus');

        // Grafik 2: Status Pekerjaan (Bekerja / Belum Bekerja)
        $bekerja = TracerStudy::whereNotNull('pekerjaan')->count();
        $belum = TracerStudy::whereNull('pekerjaan')->count();

        return view('informasi.statistik', compact('alumniPerTahun', 'bekerja', 'belum'));
    }
}

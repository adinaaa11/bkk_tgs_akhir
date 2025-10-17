<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;

class LowonganController extends Controller
{
    /**
     * Tampilkan daftar lowongan untuk user.
     */
    public function index(Request $request)
    {
        $query = Lowongan::query();

        // 🔍 Search
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nama_perusahaan', 'like', "%{$search}%")
                  ->orWhere('posisi', 'like', "%{$search}%")
                  ->orWhere('kompetensi', 'like', "%{$search}%");
            });
        }

        // 🎓 Filter kompetensi
        if ($request->has('kompetensi') && $request->kompetensi != '') {
            $query->where('kompetensi', $request->kompetensi);
        }

        // 📅 Filter sort by tanggal
        if ($request->has('sort') && in_array($request->sort, ['asc', 'desc'])) {
            $query->orderBy('tanggal', $request->sort);
        } else {
            $query->orderBy('tanggal', 'desc'); // default terbaru
        }

        // 📌 Pagination
        $lowongans = $query->paginate(6);

        // 🎓 Daftar jurusan tetap untuk dropdown
        $kompetensis = [
            'Rekayasa Perangkat Lunak',
            'Mekatronika',
            'Teknik Komputer dan Jaringan',
            'Desain Komunikasi Visual',
            'Agribisnis Pengolahan Hasil Pertanian',
            'Agribisnis Tanaman Pangan Holtikultura',
            'Teknik Pengelasan',
            'Teknik Kendaraan Ringan',
            'Teknik Bodi Kendaraan Ringan',
            'Teknik Permesinan',
        ];

        return view('lowongan.index', compact('lowongans', 'kompetensis'));
    }
}

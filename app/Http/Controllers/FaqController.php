<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    // Menampilkan daftar FAQ
    public function index()
    {
        $faqs = Faq::where('aktif', true)->latest()->get();
        return view('faq', compact('faqs'));
    }

    // (Opsional) CRUD Admin Tambah/Edit FAQ
    public function create()
    {
        return view('admin.faq.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pertanyaan' => 'required|string|max:255',
            'jawaban' => 'required|string',
        ]);

        Faq::create($request->all());
        return redirect()->route('faq.index')->with('success', 'FAQ berhasil ditambahkan!');
    }
}
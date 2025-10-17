<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KontakController extends Controller
{
    // Halaman form kontak
    public function index()
    {
        return view('kontak');
    }

    // Kirim pesan (opsional)
    public function send(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email',
            'pesan' => 'required|string|min:10',
        ]);

        // --- Simulasi kirim email / simpan ke database ---
        // Misalnya nanti kamu ingin kirim ke email admin, bisa diatur di .env
        // Mail::to('admin@bkkpurwosari.sch.id')->send(new KontakMail($request->all()));

        return back()->with('success', 'Pesan kamu sudah dikirim! Terima kasih telah menghubungi kami 😊');
    }
}

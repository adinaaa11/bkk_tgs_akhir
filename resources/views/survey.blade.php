@extends('layouts.app')

@section('title', 'Survey Kepuasan')

@section('content')
<div class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-50 via-white to-gray-100 py-12 px-6">

    <!-- Dekorasi stiker -->
    <img src="https://cdn-icons-png.flaticon.com/512/742/742751.png" 
         class="w-12 absolute top-10 left-10 opacity-70 rotate-[-12deg]" alt="sticker">
    <img src="https://cdn-icons-png.flaticon.com/512/477/477406.png" 
         class="w-10 absolute bottom-16 left-20 opacity-60 rotate-[15deg]" alt="sticker">
    <img src="https://cdn-icons-png.flaticon.com/512/833/833472.png" 
         class="w-14 absolute top-16 right-16 opacity-60 rotate-[8deg]" alt="sticker">

    <div class="w-full max-w-3xl bg-white shadow-2xl rounded-xl p-10 border border-gray-200 relative z-10">
        <!-- Header -->
        <div class="text-center mb-10">
            <h1 class="text-3xl font-extrabold text-gray-800 tracking-wide">
                <i class="bi bi-emoji-smile text-purple-600"></i> Survey Kepuasan Pengguna
            </h1>
            <p class="mt-3 text-gray-500 text-lg">
                Kami menghargai pendapat Anda. Mohon isi survei ini untuk membantu kami meningkatkan kualitas layanan <b>BKK SMKN 1 Purwosari</b>.
            </p>
        </div>

        <!-- Success Message -->
        @if (session('success'))
            <div class="mb-6 p-4 rounded-lg bg-green-100 text-green-800 font-medium shadow-sm">
                <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
            </div>
        @endif

        <!-- Form -->
        <form action="{{ route('survey.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label class="block text-gray-700 font-semibold mb-2">Nama Lengkap</label>
                <input type="text" name="nama" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none shadow-sm" placeholder="Masukkan nama Anda" required>
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-2">Email <span class="text-gray-400">(opsional)</span></label>
                <input type="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none shadow-sm" placeholder="contoh: email@gmail.com">
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-2">Seberapa puas Anda dengan layanan kami?</label>
                <select name="rating" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none shadow-sm" required>
                    <option value="">-- Pilih Penilaian --</option>
                    <option value="5">⭐⭐⭐⭐⭐ Sangat Puas</option>
                    <option value="4">⭐⭐⭐⭐ Puas</option>
                    <option value="3">⭐⭐⭐ Cukup Puas</option>
                    <option value="2">⭐⭐ Kurang Puas</option>
                    <option value="1">⭐ Tidak Puas</option>
                </select>
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-2">Saran atau Masukan</label>
                <textarea name="saran" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500 outline-none shadow-sm" placeholder="Tuliskan saran Anda di sini..." required></textarea>
            </div>

            <div class="flex justify-end">
               <button type="submit" 
    class="px-6 py-3 rounded-lg bg-gradient-to-r from-sky-400 to-blue-500 text-white font-semibold shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300">
    <i class="bi bi-send"></i> Kirim
</button>
            </div>
        </form>
    </div>
</div>
@endsection

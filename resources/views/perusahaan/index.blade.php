@extends('layouts.app')

@section('title', 'Daftar Perusahaan')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-blue-50 via-purple-50 to-pink-50 py-16 px-6">

    <!-- Hero Section -->
    <div class="text-center max-w-3xl mx-auto mb-16">
        <h1 class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 mb-6 drop-shadow-lg">
            🏢 Mitra Perusahaan
        </h1>
        <p class="text-gray-700 text-lg leading-relaxed">
            Berikut adalah daftar perusahaan mitra kami yang telah bekerja sama dalam mendukung program penyaluran kerja,
            magang, dan kerjasama lainnya. Temukan informasi detail setiap perusahaan di bawah ini.
        </p>
    </div>

    <!-- Form Pencarian + Filter -->
    <form action="{{ route('perusahaan.index') }}" method="GET" 
          class="max-w-4xl mx-auto mb-14 bg-white/90 backdrop-blur-md p-6 rounded-2xl shadow-lg border border-gray-200">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">

            <!-- Search -->
            <div class="flex items-center border rounded-xl overflow-hidden shadow-sm col-span-2">
                <input type="text" name="search" value="{{ request('search') }}"
                    class="flex-1 px-4 py-3 text-gray-700 focus:outline-none"
                    placeholder="🔍 Cari nama atau alamat perusahaan...">
                <button class="bg-gradient-to-r from-indigo-600 to-pink-500 text-white px-6 py-3 hover:opacity-90 transition">
                    Cari
                </button>
            </div>

            <!-- Filter Kategori -->
            <select name="kategori" onchange="this.form.submit()"
                class="border px-4 py-3 rounded-xl text-gray-700 shadow-sm focus:ring-2 focus:ring-pink-400">
                <option value="">📂 Semua Kategori</option>
                @foreach($kategori as $k)
                    <option value="{{ $k }}" {{ request('kategori') == $k ? 'selected' : '' }}>
                        {{ $k }}
                    </option>
                @endforeach
            </select>
        </div>
    </form>

    <!-- Grid Perusahaan -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        @forelse($perusahaans as $perusahaan)
        <div class="bg-white p-8 rounded-3xl shadow-xl border border-transparent bg-gradient-to-br from-white to-blue-50 hover:from-indigo-50 hover:to-pink-50 transition transform hover:-translate-y-2 hover:scale-[1.02] relative">

            <!-- Badge pojok -->
            @if($perusahaan->mou)
                <span class="absolute top-4 right-4 bg-gradient-to-r from-indigo-600 to-pink-600 text-white text-xs px-3 py-1 rounded-full shadow-md">
                    🔗 MOU
                </span>
            @endif

            <!-- Logo -->
            <div class="flex justify-center mb-6">
                @if($perusahaan->logo)
                    <img src="{{ asset('storage/' . $perusahaan->logo) }}" 
                         class="w-24 h-24 object-cover rounded-full ring-4 ring-pink-500/30 shadow-lg">
                @else
                    <div class="w-24 h-24 flex items-center justify-center rounded-full bg-gradient-to-r from-indigo-500 to-pink-500 text-white text-2xl font-bold shadow-lg">
                        {{ strtoupper(substr($perusahaan->nama,0,2)) }}
                    </div>
                @endif
            </div>

            <!-- Info -->
            <h2 class="text-xl font-bold text-gray-800 text-center">{{ $perusahaan->nama }}</h2>
            <p class="text-gray-500 text-center text-sm mt-1">📅 Gabung: {{ $perusahaan->tahun_gabung }}</p>
            <p class="mt-4 text-gray-600 text-center text-sm leading-relaxed">📍 {{ $perusahaan->alamat }}</p>

            <!-- Label -->
            <div class="mt-5 flex justify-center gap-2 flex-wrap">
                @if($perusahaan->kategori)
                    <span class="inline-block bg-gradient-to-r from-pink-100 to-pink-200 text-pink-700 text-xs px-3 py-1 rounded-full">
                        {{ $perusahaan->kategori }}
                    </span>
                @endif
            </div>

            <!-- Tombol -->
            <div class="mt-8 flex justify-center">
                <a href="{{ route('perusahaan.show', $perusahaan) }}" 
                   class="px-6 py-2 text-sm font-semibold text-white rounded-xl bg-gradient-to-r from-indigo-600 to-pink-500 hover:opacity-90 transition">
                   📋 Detail Perusahaan
                </a>
            </div>
        </div>
        @empty
        <!-- Empty State -->
        <div class="col-span-3 text-center py-20">
            <img src="https://illustrations.popsy.co/gray/work-from-home.svg" alt="Empty" class="w-60 mx-auto mb-6 opacity-80">
            <p class="text-gray-500 text-lg">🚫 Tidak ada perusahaan ditemukan.</p>
        </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="mt-14 flex justify-center">
        {{ $perusahaans->appends(request()->query())->links() }}
    </div>
</div>
@endsection

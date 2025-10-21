@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-blue-50 to-yellow-50 py-10">
    <div class="container mx-auto px-6">

        {{-- 🔍 Search & Filter Section --}}
        <div class="bg-white/80 backdrop-blur-md p-6 rounded-2xl shadow-lg border border-blue-100 mb-8">
            <form method="GET" action="{{ route('lowongan.index') }}" class="grid grid-cols-1 md:grid-cols-4 gap-4 items-end">
                {{-- Search --}}
                <div>
                    <label class="block text-sm font-medium text-blue-800 mb-1">Cari Lowongan</label>
                    <input type="text" name="search" value="{{ request('search') }}"
                           class="w-full rounded-xl border border-blue-200 p-3 focus:ring-2 focus:ring-blue-400 focus:outline-none"
                           placeholder="Cari perusahaan, posisi...">
                </div>

                {{-- Filter Kompetensi --}}
                <div>
                    <label class="block text-sm font-medium text-blue-800 mb-1">Kompetensi</label>
                    <select name="kompetensi"
                            class="w-full rounded-xl border border-blue-200 p-3 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                        <option value="">Semua Kompetensi</option>
                        @foreach($kompetensis as $komp)
                            <option value="{{ $komp }}" {{ request('kompetensi') == $komp ? 'selected' : '' }}>
                                {{ $komp }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Sort --}}
                <div>
                    <label class="block text-sm font-medium text-blue-800 mb-1">Urutkan</label>
                    <select name="sort"
                            class="w-full rounded-xl border border-blue-200 p-3 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                        <option value="desc" {{ request('sort')=='desc' ? 'selected' : '' }}>Terbaru</option>
                        <option value="asc" {{ request('sort')=='asc' ? 'selected' : '' }}>Terlama</option>
                    </select>
                </div>

                {{-- Button --}}
<div>
    <button type="submit"
            class="w-full bg-gradient-to-r from-blue-400 to-blue-500 text-white font-semibold py-3 rounded-xl shadow-md hover:shadow-lg hover:scale-[1.02] transition">
        Terapkan
    </button>
</div>

            </form>
        </div>

        {{-- ✨ Lowongan Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($lowongans as $lowongan)
                <div class="bg-white/90 backdrop-blur-lg rounded-2xl shadow-lg border border-blue-100 hover:shadow-2xl hover:-translate-y-1 transition p-6 flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl font-bold text-blue-700 mb-2">{{ $lowongan->posisi }}</h3>
                        <p class="text-sm text-gray-600 mb-4">
                            {{ $lowongan->nama_perusahaan }}
                        </p>

                        <span class="inline-block px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700">
                            {{ $lowongan->kompetensi }}
                        </span>

                        <p class="mt-4 text-gray-700 line-clamp-3">
                            {{ $lowongan->deskripsi }}
                        </p>
                    </div>

                    <div class="mt-6 flex items-center justify-between text-sm text-gray-500">
                        <span class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            {{ \Carbon\Carbon::parse($lowongan->tanggal)->format('d M Y') }}
                        </span>

                        <a href="#"
                           class="text-blue-600 font-semibold hover:underline">
                            Detail →
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center text-gray-600 bg-white/80 rounded-xl shadow p-10">
                    Tidak ada lowongan ditemukan.
                </div>
            @endforelse
        </div>

        {{-- 📌 Pagination --}}
        <div class="mt-10">
            {{ $lowongans->withQueryString()->links() }}
        </div>
    </div>
</div>
@endsection


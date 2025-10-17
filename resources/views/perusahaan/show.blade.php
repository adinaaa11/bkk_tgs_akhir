@extends('layouts.app')

@section('title', $perusahaan->nama)

@section('content')
<div class="container mx-auto py-16 px-6 max-w-3xl">
    <div class="bg-white/90 backdrop-blur-lg p-10 rounded-3xl shadow-2xl border border-gray-100">

        <!-- Logo -->
        <div class="flex justify-center mb-8">
            @if($perusahaan->logo)
                <img src="{{ asset('storage/' . $perusahaan->logo) }}" 
                     class="w-28 h-28 object-cover rounded-full ring-4 ring-yellow-400/30">
            @else
                <div class="w-28 h-28 flex items-center justify-center rounded-full bg-gradient-to-r from-blue-600 to-yellow-500 text-white text-3xl font-bold">
                    {{ strtoupper(substr($perusahaan->nama,0,2)) }}
                </div>
            @endif
        </div>

        <!-- Nama -->
        <h1 class="text-3xl font-bold text-center text-gray-800">{{ $perusahaan->nama }}</h1>
        <p class="text-center text-gray-500 mt-2">📍 {{ $perusahaan->alamat }}</p>

        <!-- Info -->
        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6 text-sm text-gray-700">
            <div class="p-4 bg-gray-50 rounded-xl">
                <p class="font-semibold">📅 Tahun Gabung</p>
                <p>{{ $perusahaan->tahun_gabung }}</p>
            </div>
            <div class="p-4 bg-gray-50 rounded-xl">
                <p class="font-semibold">📂 Kategori</p>
                <p>{{ $perusahaan->kategori ?? '-' }}</p>
            </div>
        </div>

        <!-- Label -->
        <div class="mt-6 flex justify-center gap-3">
            @if($perusahaan->mou)
                <span class="bg-gradient-to-r from-blue-600 to-yellow-500 text-white text-xs px-4 py-2 rounded-full">
                    MOU Partnership
                </span>
            @endif
        </div>
    </div>
</div>
@endsection

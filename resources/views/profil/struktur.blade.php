@extends('layouts.app')

@section('title', 'Struktur Organisasi BKK')

@section('content')
<style>
    .org-card {
        @apply bg-white p-6 rounded-xl shadow-lg text-center transition transform hover:-translate-y-2 hover:shadow-2xl relative;
    }
    .org-card h3 {
        @apply text-sm font-bold text-blue-600 mt-3;
    }
    .org-card p {
        @apply text-gray-600 text-xs;
    }

    /* Foto profil */
    .org-photo {
        @apply w-16 h-16 rounded-full mx-auto border-4 border-blue-500 object-cover shadow-md;
    }

    /* Garis penghubung */
    .line-down {
        position: absolute;
        top: 100%;
        left: 50%;
        width: 2px;
        height: 30px;
        background: #3b82f6;
        transform: translateX(-50%);
    }
    .line-horizontal {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        height: 2px;
        background: #3b82f6;
        z-index: -1;
    }
</style>

<div class="container mx-auto py-20">
    <h1 class="text-3xl md:text-4xl font-extrabold text-center text-gray-800 mb-20">
        📌 Struktur Organisasi <span class="text-blue-600">BKK SMKN 1 Purwosari</span>
    </h1>

    <!-- Kepala -->
    <div class="flex justify-center mb-16 relative">
        <div class="org-card w-48">
            <img src="{{ asset('Pak.Rudi.jpeg') }}" alt="Kepala Sekolah" class="org-photo">
            <h3>Kepala Sekolah</h3>
            <p class="font-semibold">Drs. Rudi Hartono</p>
            <div class="line-down"></div>
        </div>
    </div>

    <!-- Ketua & Sekretaris -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16 max-w-2xl mx-auto relative">
        <div class="org-card">
            <img src="{{ asset('Pak.Rudi.jpeg') }}" alt="Ketua BKK" class="org-photo">
            <h3>Ketua BKK</h3>
            <p class="font-semibold">Nama Ketua</p>
            <div class="line-down"></div>
        </div>
        <div class="org-card">
            <img src="{{ asset('Pak.Rudi.jpeg') }}" alt="Sekretaris" class="org-photo">
            <h3>Sekretaris</h3>
            <p class="font-semibold">Nama Sekretaris</p>
            <div class="line-down"></div>
        </div>
        <div class="line-horizontal"></div>
    </div>

    <!-- Bendahara -->
    <div class="flex justify-center mb-16 relative">
        <div class="org-card w-48">
            <img src="{{ asset('Pak.Rudi.jpeg') }}" alt="Bendahara" class="org-photo">
            <h3>Bendahara</h3>
            <p class="font-semibold">Nama Bendahara</p>
            <div class="line-down"></div>
        </div>
    </div>

    <!-- Anggota -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto relative">
        <div class="org-card">
            <img src="{{ asset('Pak.Rudi.jpeg') }}" alt="Koordinator Humas" class="org-photo">
            <h3>Koordinator Humas</h3>
            <p class="font-semibold">Nama</p>
        </div>
        <div class="org-card">
            <img src="{{ asset('Pak.Rudi.jpeg') }}" alt="Koordinator Data Alumni" class="org-photo">
            <h3>Koordinator Data Alumni</h3>
            <p class="font-semibold">Nama</p>
        </div>
        <div class="org-card">
            <img src="{{ asset('Pak.Rudi.jpeg') }}" alt="Koordinator Penempatan" class="org-photo">
            <h3>Koordinator Penempatan</h3>
            <p class="font-semibold">Nama</p>
        </div>
        <div class="line-horizontal"></div>
    </div>
</div>
@endsection

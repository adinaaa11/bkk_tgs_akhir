@extends('layouts.app')

@section('title', 'Struktur Organisasi BKK')

@section('content')
<style>
    /* HERO */
    .org-hero {
        background: linear-gradient(to right, #2563eb, #1e40af);
        color: #fff;
        text-align: center;
        padding: 70px 20px;
        border-radius: 16px;
        margin-bottom: 60px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.25);
    }
    .org-hero h1 {
        font-size: 2.2rem;
        font-weight: 800;
        margin-bottom: 8px;
    }
    .org-hero p {
        font-size: 1.05rem;
        opacity: 0.9;
    }

    /* CARD */
    .org-card {
        background: #fff;
        padding: 28px;
        border-radius: 14px;
        text-align: center;
        transition: 0.3s ease;
        box-shadow: 0 6px 16px rgba(0,0,0,0.08);
        border: 1px solid #e5e7eb;
        position: relative;
    }
    .org-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 25px rgba(37,99,235,0.2);
    }
    .org-card h3 {
        font-size: 1rem;
        font-weight: 700;
        color: #2563eb;
        margin-top: 14px;
        margin-bottom: 6px;
    }
    .org-card p {
        font-size: 0.95rem;
        color: #374151;
        font-weight: 600;
    }

    /* FOTO PROFIL (diperbesar) */
    .org-photo {
        width: 110px;
        height: 110px;
        border-radius: 50%;
        margin: 0 auto;
        object-fit: cover;
        border: 5px solid transparent;
        background: linear-gradient(135deg, #2563eb, #1e40af) border-box;
        box-shadow: 0 6px 14px rgba(0,0,0,0.2);
    }

    /* GARIS */
    .line-down {
        position: absolute;
        top: 100%;
        left: 50%;
        width: 2px;
        height: 32px;
        background: #93c5fd; /* biru muda */
        transform: translateX(-50%);
    }
    .line-horizontal {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        height: 2px;
        background: #93c5fd;
        z-index: -1;
    }
</style>

<div class="container mx-auto py-10 px-4">

    <!-- Hero Section -->
    <div class="org-hero">
        <h1>Struktur Organisasi BKK SMKN 1 Purwosari</h1>
        <p>Struktur kepengurusan BKK yang solid & profesional</p>
    </div>

    <!-- Kepala -->
    <div class="flex justify-center mb-16 relative">
        <div class="org-card w-56">
            <img src="{{ asset('Pak.Rudi.jpeg') }}" alt="Kepala Sekolah" class="org-photo">
            <h3>Kepala Sekolah</h3>
            <p>Drs. Rudi Hartono</p>
            <div class="line-down"></div>
        </div>
    </div>

    <!-- Ketua & Sekretaris -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-16 max-w-3xl mx-auto relative">
        <div class="org-card">
            <img src="{{ asset('Pak.Rudi.jpeg') }}" alt="Ketua BKK" class="org-photo">
            <h3>Ketua BKK</h3>
            <p>Nama Ketua</p>
            <div class="line-down"></div>
        </div>
        <div class="org-card">
            <img src="{{ asset('Pak.Rudi.jpeg') }}" alt="Sekretaris" class="org-photo">
            <h3>Sekretaris</h3>
            <p>Nama Sekretaris</p>
            <div class="line-down"></div>
        </div>
        <div class="line-horizontal"></div>
    </div>

    <!-- Bendahara -->
    <div class="flex justify-center mb-16 relative">
        <div class="org-card w-56">
            <img src="{{ asset('Pak.Rudi.jpeg') }}" alt="Bendahara" class="org-photo">
            <h3>Bendahara</h3>
            <p>Nama Bendahara</p>
            <div class="line-down"></div>
        </div>
    </div>

    <!-- Anggota -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-5xl mx-auto relative">
        <div class="org-card">
            <img src="{{ asset('Pak.Rudi.jpeg') }}" alt="Koordinator Humas" class="org-photo">
            <h3>Koordinator Humas</h3>
            <p>Nama</p>
        </div>
        <div class="org-card">
            <img src="{{ asset('Pak.Rudi.jpeg') }}" alt="Koordinator Data Alumni" class="org-photo">
            <h3>Koordinator Data Alumni</h3>
            <p>Nama</p>
        </div>
        <div class="org-card">
            <img src="{{ asset('Pak.Rudi.jpeg') }}" alt="Koordinator Penempatan" class="org-photo">
            <h3>Koordinator Penempatan</h3>
            <p>Nama</p>
        </div>
        <div class="line-horizontal"></div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Motto BKK SMKN 1 Purwosari')

@section('content')
<style>
    .motto-hero {
        background: linear-gradient(135deg, #374151, #1f2937); /* abu gelap → hitam lembut */
        color: white;
        padding: 60px 20px;
        text-align: center;
        border-radius: 12px;
        margin-bottom: 40px;
        box-shadow: 0 6px 15px rgba(0,0,0,0.15);
    }
    .motto-hero h1 {
        font-size: 2.3rem;
        font-weight: 800;
        margin-bottom: 12px;
        letter-spacing: 0.5px;
    }
    .motto-hero p {
        font-size: 1.1rem;
        font-weight: 400;
        opacity: 0.9;
    }

    .motto-section {
        background: #ffffff;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 6px 15px rgba(0,0,0,0.08);
        text-align: center;
    }
    .motto-section h3 {
        font-weight: 700;
        margin-bottom: 20px;
        color: #1f2937; /* abu gelap */
    }
    .motto-list {
        list-style: none;
        padding: 0;
    }
    .motto-list li {
        font-size: 1.05rem;
        margin: 14px 0;
        font-weight: 500;
        position: relative;
        padding-left: 34px;
        color: #374151;
    }
    .motto-list li::before {
        content: "✔";
        position: absolute;
        left: 0;
        color: #374151; /* abu elegan */
        font-size: 1.1rem;
        font-weight: bold;
    }
</style>

<div class="container py-5">
    <!-- Hero Motto -->
    <div class="motto-hero">
        <h1>Motto BKK SMKN 1 Purwosari</h1>
        <p>Mengantarkan siswa dan alumni menuju dunia kerja & industri</p>
    </div>

    <!-- Motto Content -->
    <div class="motto-section">
        <h3>Motto Kami</h3>
        <ul class="motto-list">
            <li>Siap kerja, berkarakter, dan profesional.</li>
            <li>Menjadi penghubung siswa, alumni, dan dunia industri.</li>
            <li>Melayani dengan sepenuh hati untuk masa depan cerah.</li>
        </ul>
    </div>
</div>
@endsection

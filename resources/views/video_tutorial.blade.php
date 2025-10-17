@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    <!-- Header -->
    <div class="text-center mb-5">
        <h2 class="fw-bold text-uppercase" style="color: #1e3a8a;">Video Tutorial</h2>
        <p class="text-muted">Panduan singkat untuk membantu Anda menggunakan layanan BKK SMKN 1 Purwosari dengan mudah.</p>
    </div>

    <!-- Daftar Video -->
    <div class="row g-4">
        <!-- Video 1 -->
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden h-100">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/DUMMY_VIDEO_ID1" title="Cara Mendaftar di BKK" allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <h5 class="fw-bold" style="color: #1e3a8a;">Cara Mendaftar di BKK</h5>
                    <p class="text-muted small mb-0">Panduan langkah demi langkah untuk mendaftar sebagai siswa atau alumni di platform BKK SMKN 1 Purwosari.</p>
                </div>
            </div>
        </div>

        <!-- Video 2 -->
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden h-100">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/DUMMY_VIDEO_ID2" title="Cara Login dan Melengkapi Profil" allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <h5 class="fw-bold" style="color: #1e3a8a;">Cara Login dan Melengkapi Profil</h5>
                    <p class="text-muted small mb-0">Pelajari cara login dan memperbarui data pribadi serta keahlian untuk meningkatkan peluang kerja.</p>
                </div>
            </div>
        </div>

        <!-- Video 3 -->
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden h-100">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/DUMMY_VIDEO_ID3" title="Cara Melamar Lowongan Kerja" allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <h5 class="fw-bold" style="color: #1e3a8a;">Cara Melamar Lowongan Kerja</h5>
                    <p class="text-muted small mb-0">Tonton panduan cara melamar pekerjaan melalui sistem BKK, lengkap dengan tips sukses wawancara.</p>
                </div>
            </div>
        </div>

        <!-- Video 4 -->
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden h-100">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/DUMMY_VIDEO_ID4" title="Cara Melihat Status Lamaran" allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <h5 class="fw-bold" style="color: #1e3a8a;">Cara Melihat Status Lamaran</h5>
                    <p class="text-muted small mb-0">Panduan untuk memantau status lamaran kerja dan mengetahui hasil seleksi dengan mudah.</p>
                </div>
            </div>
        </div>

        <!-- Video 5 -->
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden h-100">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/DUMMY_VIDEO_ID5" title="Cara Perusahaan Membuka Lowongan" allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <h5 class="fw-bold" style="color: #1e3a8a;">Cara Perusahaan Membuka Lowongan</h5>
                    <p class="text-muted small mb-0">Tutorial khusus untuk perusahaan dalam membuat, mengedit, dan menghapus lowongan pekerjaan di sistem BKK.</p>
                </div>
            </div>
        </div>

        <!-- Video 6 -->
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden h-100">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/DUMMY_VIDEO_ID6" title="Tips Meningkatkan Peluang Kerja" allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <h5 class="fw-bold" style="color: #1e3a8a;">Tips Meningkatkan Peluang Kerja</h5>
                    <p class="text-muted small mb-0">Video motivasi dan panduan bagaimana mempersiapkan diri agar lebih siap menghadapi dunia kerja.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

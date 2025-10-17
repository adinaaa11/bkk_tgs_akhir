@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg border-0 rounded-4">
        <!-- Header -->
        <div class="card-header text-white fw-bold"
             style="background-color: #2c3e50;">
            <i class="bi bi-emoji-smile"></i> Survey Kepuasan Pengguna
        </div>

        <div class="card-body bg-light">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <p class="mb-4 text-secondary">
                Kami menghargai pendapat Anda. Silakan isi survei ini untuk membantu kami meningkatkan kualitas layanan BKK SMKN 1 Purwosari.
            </p>

            <form action="{{ route('survey.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-semibold">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama Anda" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Email (opsional)</label>
                    <input type="email" name="email" class="form-control" placeholder="contoh: email@gmail.com">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Seberapa puas Anda dengan layanan kami?</label>
                    <select name="rating" class="form-select" required>
                        <option value="">-- Pilih Penilaian --</option>
                        <option value="5">⭐⭐⭐⭐⭐ Sangat Puas</option>
                        <option value="4">⭐⭐⭐⭐ Puas</option>
                        <option value="3">⭐⭐⭐ Cukup Puas</option>
                        <option value="2">⭐⭐ Kurang Puas</option>
                        <option value="1">⭐ Tidak Puas</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Saran atau Masukan</label>
                    <textarea name="saran" rows="4" class="form-control" placeholder="Tuliskan saran Anda di sini..." required></textarea>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn text-white px-4"
                            style="background-color:#2c3e50;">
                        <i class="bi bi-send"></i> Kirim
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

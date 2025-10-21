@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    <!-- Header -->
    <div class="text-center mb-4">
        <h2 class="fw-bold text-uppercase" style="color: #1e3a8a;">Hubungi Kami</h2>
        <p class="text-muted">Kami siap membantu Anda. Silakan kirimkan pesan atau pertanyaan melalui form di bawah ini.</p>
    </div>

    <div class="row g-4 align-items-start">
        <!-- Form Kontak -->
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-4 p-4">
                <form>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nama Lengkap</label>
                        <input type="text" class="form-control rounded-3" placeholder="Masukkan nama Anda">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Email</label>
                        <input type="email" class="form-control rounded-3" placeholder="Masukkan email aktif">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Subjek</label>
                        <input type="text" class="form-control rounded-3" placeholder="Judul pesan">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Pesan</label>
                        <textarea class="form-control rounded-3" rows="5" placeholder="Tulis pesan Anda di sini..."></textarea>
                    </div>
                    <div class="text-end">
                        <button type="submit" 
                                class="btn px-4 py-2 rounded-3 text-white fw-semibold shadow-sm"
                                style="background: linear-gradient(90deg, #2563eb, #1d4ed8); border: none;">
                            <i class="bi bi-send-fill"></i> Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Info Kontak -->
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-4 p-4" style="background: linear-gradient(180deg, #1e3a8a, #1d4ed8);">
                <h5 class="text-white fw-bold mb-3"><i class="bi bi-geo-alt-fill"></i> Alamat Kami</h5>
                <p class="text-light mb-4">
                    SMKN 1 Purwosari<br>
                    Jl. Raya Purwosari No. 123, Pasuruan, Jawa Timur 67162
                </p>

                <h5 class="text-white fw-bold mb-3"><i class="bi bi-telephone-fill"></i> Telepon</h5>
                <p class="text-light mb-4">
                    (0343) 123456<br>
                    +62 812 3456 7890
                </p>

                <h5 class="text-white fw-bold mb-3"><i class="bi bi-envelope-fill"></i> Email</h5>
                <p class="text-light mb-4">
                    bkk@smkn1purwosari.sch.id
                </p>

                <h5 class="text-white fw-bold mb-3"><i class="bi bi-clock-fill"></i> Jam Operasional</h5>
                <p class="text-light">
                    Senin - Jumat: 08.00 - 15.00 WIB<br>
                    Sabtu - Minggu: Tutup
                </p>
            </div>
        </div>
    </div>

    <!-- Peta Lokasi -->
    <div class="mt-5">
        <h4 class="fw-bold text-center mb-3" style="color: #1e3a8a;">Lokasi Kami</h4>
        <div class="ratio ratio-16x9 rounded-4 shadow-lg overflow-hidden">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.820765383708!2d112.729!3d-7.730!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7c90b3a1f0d8d%3A0x12bfae8ef8b679!2sSMKN%201%20Purwosari!5e0!3m2!1sid!2sid!4v0000000000"
                width="100%" height="400" style="border:0;" allowfullscreen loading="lazy">
            </iframe>
        </div>
    </div>
</div>
@endsection

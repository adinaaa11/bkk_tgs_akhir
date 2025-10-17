@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    <!-- Header -->
    <div class="text-center mb-4">
        <h2 class="fw-bold text-uppercase" style="color: #004080;">Pengumuman BKK SMKN 1 Purwosari</h2>
        <p class="text-muted">Informasi dan pengumuman terbaru dari Bursa Kerja Khusus SMKN 1 Purwosari</p>
        <hr class="mx-auto" style="width: 120px; height: 3px; background-color: #004080; border: none;">
    </div>

    <!-- Isi Pengumuman -->
    @if($pengumumans->isEmpty())
        <div class="text-center py-5">
            <img src="{{ asset('images/empty.png') }}" alt="Kosong" style="width: 120px;">
            <p class="text-muted mt-3 mb-0">Belum ada pengumuman yang tersedia saat ini.</p>
        </div>
    @else
        <div class="row g-4">
            @foreach($pengumumans as $item)
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
                        @if($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" 
                                 class="card-img-top" 
                                 alt="{{ $item->judul }}" 
                                 style="height: 200px; object-fit: cover;">
                        @endif
                        <div class="card-body">
                            <h5 class="fw-bold">{{ $item->judul }}</h5>
                            <p class="text-muted small mb-2">
                                <i class="bi bi-calendar-event"></i> 
                                {{ $item->created_at->translatedFormat('d F Y') }}
                            </p>
                            <p class="card-text">{{ Str::limit($item->isi, 120) }}</p>
                            <a href="{{ route('pengumuman.show', $item->id) }}" 
                               class="btn btn-sm text-white rounded-pill px-3" 
                               style="background-color: #004080;">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-4 d-flex justify-content-center">
            {{ $pengumumans->links() }}
        </div>
    @endif
</div>
@endsection

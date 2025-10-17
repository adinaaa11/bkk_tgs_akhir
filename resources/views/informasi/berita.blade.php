@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Header -->
    <div class="text-center mb-4">
        <h3 class="fw-bold text-dark">
            <i class="bi bi-newspaper text-primary"></i> Berita Terbaru
        </h3>
        <p class="text-secondary">Informasi dan kegiatan terbaru dari BKK SMKN 1 Purwosari</p>
    </div>

    <!-- Daftar Berita -->
    @if($beritas->isEmpty())
        <div class="text-center py-5 text-muted">
            <i class="bi bi-info-circle"></i> Belum ada berita yang tersedia.
        </div>
    @else
        <div class="row">
            @foreach($beritas as $item)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        @if($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" 
                                 class="card-img-top" 
                                 alt="Gambar Berita" 
                                 style="height:200px; object-fit:cover;">
                        @else
                            <div class="bg-secondary text-white text-center py-5">
                                <i class="bi bi-image"></i> Tidak ada gambar
                            </div>
                        @endif

                        <div class="card-body bg-light">
                            <h5 class="card-title fw-bold text-dark">{{ $item->judul }}</h5>
                            <p class="text-secondary small mb-2">
                                <i class="bi bi-calendar3"></i> {{ $item->created_at->format('d M Y') }}
                            </p>
                            <p class="card-text text-secondary" style="font-size: 0.9rem;">
                                {{ Str::limit($item->isi, 120, '...') }}
                            </p>
                            <a href="{{ route('berita.show', $item->id) }}" 
                               class="btn btn-sm text-white mt-2"
                               style="background-color:#2c3e50;">
                                <i class="bi bi-eye"></i> Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $beritas->links() }}
        </div>
    @endif
</div>
@endsection

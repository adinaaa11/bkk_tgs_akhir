@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $berita->judul }}</h2>
    <p><small>Diterbitkan: {{ $berita->created_at->format('d M Y') }}</small></p>
    
    @if($berita->gambar)
        <img src="{{ asset('storage/' . $berita->gambar) }}" class="img-fluid mb-3" alt="{{ $berita->judul }}">
    @endif
    
    <p>{{ $berita->isi }}</p>

    <a href="{{ route('berita.index') }}" class="btn btn-secondary mt-3">← Kembali</a>
</div>
@endsection

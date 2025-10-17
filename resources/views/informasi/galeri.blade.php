@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="text-center mb-4">
    <h2 class="fw-bold text-uppercase" style="color:#004080">Galeri & Kegiatan</h2>
    <p class="text-muted">Dokumentasi kegiatan BKK</p>
  </div>

  @if($galeris->isEmpty())
    <div class="text-center py-5"><p class="text-muted">Belum ada galeri.</p></div>
  @else
    <div class="row g-4">
      @foreach($galeris as $g)
        <div class="col-md-4">
          <div class="card border-0 shadow-sm">
            @if($g->gambar)
              <img src="{{ asset('storage/'.$g->gambar) }}" class="card-img-top" style="height:220px;object-fit:cover">
            @endif
            <div class="card-body">
              <h5 class="fw-bold">{{ $g->judul }}</h5>
              <p class="text-muted small">{{ Str::limit($g->deskripsi, 80) }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <div class="mt-4">{{ $galeris->links() }}</div>
  @endif
</div>
@endsection

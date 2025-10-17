@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="text-center mb-4">
    <h2 class="fw-bold" style="color:#004080">Testimoni</h2>
    <p class="text-muted">Suara alumni & mitra</p>
  </div>

  {{-- Alert sukses --}}
  @if(session('success'))
    <div class="alert alert-success text-center">
      {{ session('success') }}
    </div>
  @endif

  {{-- Form tambah testimoni --}}
  <div class="card shadow-sm mb-5">
    <div class="card-body">
      <h5 class="mb-3">Kirim Testimoni Kamu</h5>
      <form action="{{ route('testimoni.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
          <div class="col-md-6">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
          </div>
          <div class="col-md-6">
            <label>Posisi (opsional)</label>
            <input type="text" name="posisi" class="form-control">
          </div>
        </div>

        <div class="mt-3">
          <label>Isi Testimoni</label>
          <textarea name="isi" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mt-3">
          <label>Foto (opsional)</label>
          <input type="file" name="foto" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Kirim</button>
      </form>
    </div>
  </div>

  {{-- Daftar testimoni --}}
  @if($testimonis->isEmpty())
    <div class="text-center py-5"><p class="text-muted">Belum ada testimoni.</p></div>
  @else
    <div class="row g-4">
      @foreach($testimonis as $t)
        <div class="col-md-6">
          <div class="card border-0 shadow-sm p-4">
            <p class="fst-italic">“{{ $t->isi }}”</p>
            <h6 class="fw-bold mt-3">{{ $t->nama }}</h6>
            <p class="small text-muted">{{ $t->posisi }}</p>
          </div>
        </div>
      @endforeach
    </div>
    <div class="mt-4">{{ $testimonis->links() }}</div>
  @endif
</div>
@endsection

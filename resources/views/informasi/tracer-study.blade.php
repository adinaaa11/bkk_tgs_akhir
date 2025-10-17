@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="text-center mb-4">
    <h2 class="fw-bold" style="color:#004080">Tracer Study</h2>
    <p class="text-muted">Isi data alumni dan pengalaman kerja kamu</p>
  </div>

  {{-- Alert sukses --}}
  @if(session('success'))
    <div class="alert alert-success text-center">
      {{ session('success') }}
    </div>
  @endif

  {{-- Form Input --}}
  <div class="card shadow-sm mb-5">
    <div class="card-body">
      <h5 class="mb-3">Form Tracer Study</h5>
      <form action="{{ route('tracer.store') }}" method="POST">
        @csrf
        <div class="row g-3">
          <div class="col-md-6">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" required>
          </div>
          <div class="col-md-6">
            <label>Tahun Lulus</label>
            <input type="text" name="tahun_lulus" class="form-control" placeholder="Misal: 2023" required>
          </div>
        </div>

        <div class="row g-3 mt-3">
          <div class="col-md-4">
            <label>Pekerjaan</label>
            <input type="text" name="pekerjaan" class="form-control">
          </div>
          <div class="col-md-4">
            <label>Perusahaan</label>
            <input type="text" name="perusahaan" class="form-control">
          </div>
          <div class="col-md-4">
            <label>Jabatan</label>
            <input type="text" name="jabatan" class="form-control">
          </div>
        </div>

        <div class="mt-3">
          <label>Kesan & Pesan</label>
          <textarea name="kesan" class="form-control" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Kirim</button>
      </form>
    </div>
  </div>

  {{-- Daftar hasil tracer --}}
  @if($tracers->isEmpty())
    <div class="text-center py-5"><p class="text-muted">Belum ada data tracer study.</p></div>
  @else
    <div class="row g-4">
      @foreach($tracers as $t)
        <div class="col-md-6">
          <div class="card border-0 shadow-sm p-4">
            <h5 class="fw-bold">{{ $t->nama }} ({{ $t->tahun_lulus }})</h5>
            <p class="text-muted mb-1">{{ $t->jabatan ?? '-' }} @ {{ $t->perusahaan ?? '-' }}</p>
            <p class="small text-muted">{{ $t->pekerjaan ?? 'Belum bekerja' }}</p>
            @if($t->kesan)
              <p class="fst-italic mt-2">“{{ $t->kesan }}”</p>
            @endif
          </div>
        </div>
      @endforeach
    </div>

    <div class="mt-4">{{ $tracers->links() }}</div>
  @endif
</div>
@endsection

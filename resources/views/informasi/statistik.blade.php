@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="text-center mb-4">
    <h2 class="fw-bold" style="color:#004080">Statistik Tracer Study</h2>
    <p class="text-muted">Data alumni berdasarkan tahun lulus dan status pekerjaan</p>
  </div>

  <div class="row">
    <div class="col-md-6 mb-4">
      <div class="card shadow-sm p-4">
        <h5 class="fw-bold mb-3 text-center">Jumlah Alumni per Tahun</h5>
        <canvas id="chartTahun"></canvas>
      </div>
    </div>

    <div class="col-md-6 mb-4">
      <div class="card shadow-sm p-4">
        <h5 class="fw-bold mb-3 text-center">Status Pekerjaan Alumni</h5>
        <canvas id="chartStatus"></canvas>
      </div>
    </div>
  </div>
</div>

{{-- Chart.js --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Data alumni per tahun
  const ctx1 = document.getElementById('chartTahun');
  new Chart(ctx1, {
    type: 'bar',
    data: {
      labels: {!! json_encode($alumniPerTahun->keys()) !!},
      datasets: [{
        label: 'Jumlah Alumni',
        data: {!! json_encode($alumniPerTahun->values()) !!},
        backgroundColor: '#007bff',
      }]
    }
  });

  // Data status pekerjaan
  const ctx2 = document.getElementById('chartStatus');
  new Chart(ctx2, {
    type: 'pie',
    data: {
      labels: ['Bekerja', 'Belum Bekerja'],
      datasets: [{
        data: [{{ $bekerja }}, {{ $belum }}],
        backgroundColor: ['#28a745', '#dc3545'],
      }]
    }
  });
</script>
@endsection
@extends('layouts.app')

@section('title', 'Program Kerja BKK SMKN 1 Purwosari')

@section('content')
<style>
/* ---------- HERO ---------- */
.program-hero {
  background: linear-gradient(to right, #2563eb, #1e40af);
  color: #fff;
  text-align: center;
  padding: 80px 20px;
  border-radius: 18px;
  margin: 20px auto 50px;
  box-shadow: 0 6px 20px rgba(0,0,0,0.25);
}
.program-hero h1 {
  font-size: 2.5rem;
  font-weight: 800;
  margin-bottom: 10px;
}
.program-hero p {
  font-size: 1.1rem;
  opacity: 0.9;
}

/* ---------- GRID ---------- */
.program-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 25px;
}
@media (min-width: 768px) {
  .program-grid {
    grid-template-columns: repeat(3, 1fr);
  }
}
.program-card {
  background: #fff;
  border-radius: 16px;
  padding: 28px 22px;
  box-shadow: 0 6px 18px rgba(0,0,0,0.08);
  transition: 0.3s ease;
  border: 1px solid #e5e7eb;
}
.program-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 12px 25px rgba(37,99,235,0.25);
}
.program-icon {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 16px;
  font-size: 30px;
  background: linear-gradient(135deg,#2563eb,#1e40af);
  color: #fff;
}
.program-card h5 {
  text-align: center;
  font-size: 1.1rem;
  font-weight: 700;
  color: #1e40af;
  margin-bottom: 12px;
}
.program-card ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
.program-card li {
  font-size: 0.95rem;
  color: #374151;
  line-height: 1.6;
  margin-bottom: 6px;
  position: relative;
}
.program-card li::before {
  content: "✔";
  color: #2563eb;
  margin-right: 8px;
}

/* ---------- TABLE ---------- */
.table-section {
  margin-top: 70px;
  background: #fff;
  border-radius: 16px;
  padding: 35px;
  box-shadow: 0 8px 22px rgba(0,0,0,0.1);
}
.table-section h3 {
  text-align: center;
  font-size: 1.4rem;
  font-weight: 700;
  color: #1e40af;
  margin-bottom: 25px;
}
.table thead {
  background: #2563eb;
  color: #fff;
}
.table tbody tr:nth-child(odd) {
  background: #f1f5f9; /* abu muda */
}
.table tbody tr:nth-child(even) {
  background: #e0f2fe; /* biru muda */
}
.table tbody tr:hover {
  background: #dbeafe; /* hover biru lebih pekat */
}
.table td, .table th {
  vertical-align: middle;
}
</style>

<!-- HERO -->
<section class="program-hero">
  <h1>Program Kerja BKK SMKN 1 Purwosari</h1>
  <p>Mendukung visi & misi melalui layanan, pelatihan, dan kolaborasi industri.</p>
</section>

<!-- PROGRAM GRID -->
<div class="container py-5">
  <div class="text-center mb-10">
    <h2 class="text-2xl font-bold text-blue-700">💼 Program Unggulan</h2>
    <p class="text-gray-600 mt-2">Rangkaian kegiatan utama BKK untuk siswa dan alumni</p>
  </div>

  <div class="program-grid">
    <div class="program-card">
      <div class="program-icon">🎓</div>
      <h5>Pelayanan Siswa & Alumni</h5>
      <ul>
        <li>Info lowongan kerja terbaru.</li>
        <li>Database alumni siap kerja.</li>
        <li>Bimbingan karir & etika kerja.</li>
      </ul>
    </div>
    <div class="program-card">
      <div class="program-icon">🤝</div>
      <h5>Kerja Sama dengan DUDI</h5>
      <ul>
        <li>Kerjasama perekrutan dengan perusahaan.</li>
        <li>Penghubung siswa/alumni & industri.</li>
        <li>MoU dengan mitra perusahaan.</li>
      </ul>
    </div>
    <div class="program-card">
      <div class="program-icon">📋</div>
      <h5>Rekrutmen & Penyaluran</h5>
      <ul>
        <li>Rekrutmen langsung di sekolah.</li>
        <li>Layanan rekrutmen online.</li>
        <li>Penyaluran sesuai jurusan.</li>
      </ul>
    </div>
    <div class="program-card">
      <div class="program-icon">📚</div>
      <h5>Pelatihan & Pengembangan</h5>
      <ul>
        <li>Pelatihan soft skill & hard skill.</li>
        <li>Workshop CV & wawancara.</li>
        <li>Simulasi psikotes & interview.</li>
      </ul>
    </div>
    <div class="program-card">
      <div class="program-icon">📢</div>
      <h5>Promosi & Publikasi</h5>
      <ul>
        <li>Brosur & website lowongan kerja.</li>
        <li>Publikasi di media sosial & website.</li>
        <li>Job fair berkala.</li>
      </ul>
    </div>
    <div class="program-card">
      <div class="program-icon">📊</div>
      <h5>Monitoring & Evaluasi</h5>
      <ul>
        <li>Monitoring alumni yang bekerja.</li>
        <li>Evaluasi kepuasan mitra.</li>
        <li>Laporan tahunan BKK.</li>
      </ul>
    </div>
  </div>
</div>

<!-- TABLE -->
<div class="container table-section">
  <h3>📅 Rencana Kerja Tahunan</h3>
  <div class="table-responsive">
    <table class="table align-middle table-hover text-center">
      <thead>
        <tr>
          <th>No</th>
          <th>Kegiatan</th>
          <th>Waktu</th>
          <th>Penanggung Jawab</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Pendataan alumni & update database</td>
          <td>Jan – Feb</td>
          <td>Koordinator BKK</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Pelatihan soft skill & persiapan kerja</td>
          <td>Mar – Apr</td>
          <td>Tim Pelatihan</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Rekrutmen & seleksi tenaga kerja</td>
          <td>Mei – Jun</td>
          <td>BKK & HRD Mitra</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Job Fair BKK</td>
          <td>Jul – Ags</td>
          <td>BKK & Panitia</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Monitoring alumni bekerja</td>
          <td>Sep – Okt</td>
          <td>Koordinator Alumni</td>
        </tr>
        <tr>
          <td>6</td>
          <td>Evaluasi & laporan tahunan</td>
          <td>Nov – Des</td>
          <td>Kepala BKK</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection

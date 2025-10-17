@extends('layouts.app')

@section('title', 'Program Kerja BKK SMKN 1 Purwosari')

@section('content')
<style>
/* Hero Section */
.program-hero {
    position: relative;
    background: url('https://source.unsplash.com/1600x500/?business,education') center/cover no-repeat;
    height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
    margin-bottom: 40px;
    overflow: hidden;
}
.program-hero .overlay {
    background: rgba(0,0,0,0.55);
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}
.hero-title {
    font-size: 2.8rem;
    font-weight: 800;
    color: white;
    margin-bottom: 10px;
}
.hero-title span {
    color: #00f2fe;
}
.hero-subtitle {
    font-size: 1.1rem;
    color: #f1f1f1;
    font-weight: 400;
    max-width: 700px;
    margin: 0 auto;
}

/* Section Title */
.section-title {
    padding: 20px;
    border-radius: 12px;
    background: linear-gradient(135deg, #fdfbfb, #ebedee);
}
.section-title h2 {
    font-weight: 800;
    color: #333;
}
.section-title h2 span {
    color: #0077ff;
}
.section-title .subtitle {
    font-size: 15px;
    color: #555;
}

/* Program Grid */
.program-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
}
.program-card {
    background: #fff;
    border-radius: 15px;
    padding: 30px 20px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    text-align: center;
}
.program-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.15);
}
.program-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 36px;
    margin: 0 auto 20px auto;
    background: linear-gradient(135deg, #4facfe, #00f2fe);
    color: white;
}
.program-card h5 {
    font-weight: 600;
    margin-bottom: 15px;
}
.program-card p, 
.program-card ul {
    font-size: 15px;
    line-height: 1.6;
    margin: 0;
    padding-left: 0;
    list-style: none;
}

/* Table Style */
.table-section {
    background: #fff;
    border-radius: 15px;
    padding: 30px;
    margin-top: 50px;
    box-shadow: 0px 6px 15px rgba(0,0,0,0.1);
}
.table thead {
    background: #0d6efd;
    color: #fff;
}
.table tbody tr {
    transition: 0.3s;
}
.table tbody tr:hover {
    background: #f8f9fa;
}

/* Warna pastel tiap baris */
.table tbody tr:nth-child(1) { background: #e3f2fd; }
.table tbody tr:nth-child(2) { background: #f1f8e9; }
.table tbody tr:nth-child(3) { background: #fff3e0; }
.table tbody tr:nth-child(4) { background: #fce4ec; }
.table tbody tr:nth-child(5) { background: #ede7f6; }
.table tbody tr:nth-child(6) { background: #e0f7fa; }

/* Badge Pastel */
.badge-pastel {
    display: inline-block;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    color: #333;
}
.badge-blue { background: #bbdefb; }
.badge-green { background: #c8e6c9; }
.badge-orange { background: #ffe0b2; }
.badge-pink { background: #f8bbd0; }
.badge-purple { background: #d1c4e9; }
.badge-cyan { background: #b2ebf2; }
</style>

<div class="program-section py-5" style="background: #f8fafc;">
    <div class="container">
        <div class="section-title text-center mb-5">
            <h2>✨ Program Kerja <span>BKK SMKN 1 Purwosari</span> ✨</h2>
            <p class="subtitle">Mendukung siswa & alumni menuju dunia kerja dan industri</p>
        </div>

        <!-- Program Cards -->
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
</div>

<!-- Tabel Rencana Kerja Tahunan -->
<div class="table-section mt-5">
    <h3 class="mb-4 text-center fw-bold">📅 Rencana Kerja Tahunan BKK</h3>
    <div class="table-responsive">
        <table class="table align-middle shadow-sm rounded overflow-hidden">
            <thead class="text-center text-white" style="background: #0d6efd;">
                <tr>
                    <th style="width: 60px;">No</th>
                    <th>Kegiatan</th>
                    <th style="width: 220px;">Waktu Pelaksanaan</th>
                    <th style="width: 220px;">Penanggung Jawab</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center fw-bold">1</td>
                    <td>Pendataan alumni dan update database</td>
                    <td><span class="badge-pastel badge-blue">📌 Januari – Februari</span></td>
                    <td>👤 Koordinator BKK</td>
                </tr>
                <tr>
                    <td class="text-center fw-bold">2</td>
                    <td>Pelatihan soft skill & persiapan kerja</td>
                    <td><span class="badge-pastel badge-green">📌 Maret – April</span></td>
                    <td>👤 Tim Pelatihan</td>
                </tr>
                <tr>
                    <td class="text-center fw-bold">3</td>
                    <td>Rekrutmen & seleksi calon tenaga kerja</td>
                    <td><span class="badge-pastel badge-orange">📌 Mei – Juni</span></td>
                    <td>👤 BKK & HRD Mitra</td>
                </tr>
                <tr>
                    <td class="text-center fw-bold">4</td>
                    <td>Job Fair BKK</td>
                    <td><span class="badge-pastel badge-pink">📌 Juli – Agustus</span></td>
                    <td>👤 BKK & Panitia</td>
                </tr>
                <tr>
                    <td class="text-center fw-bold">5</td>
                    <td>Monitoring alumni bekerja</td>
                    <td><span class="badge-pastel badge-purple">📌 September – Oktober</span></td>
                    <td>👤 Koordinator Alumni</td>
                </tr>
                <tr>
                    <td class="text-center fw-bold">6</td>
                    <td>Evaluasi & laporan kegiatan tahunan</td>
                    <td><span class="badge-pastel badge-cyan">📌 November – Desember</span></td>
                    <td>👤 Kepala BKK</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

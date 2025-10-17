@extends('layouts.app')

@section('content')
<section class="bg-gray-700 text-white text-center py-16">
  <h1 class="text-3xl font-bold">Visi & Misi BKK SMKN 1 Purwosari</h1>
  <p class="mt-2 text-gray-200">Menjadi jembatan unggul antara dunia pendidikan dan dunia kerja</p>
</section>

<section class="py-16 container mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
  <!-- Visi -->
  <div data-aos="fade-right">
    <h2 class="text-blue-600 text-2xl font-bold mb-4">✨ Visi</h2>
    <p class="text-justify leading-relaxed">
      Terwujudnya <strong>Bursa Kerja Khusus (BKK) SMKN 1 Purwosari</strong> 
      sebagai pusat layanan informasi dan penyaluran kerja yang profesional, 
      terpercaya, serta mampu menjembatani siswa, alumni, dan perusahaan.
    </p>
  </div>
  
  <!-- Misi -->
  <div data-aos="fade-left">
    <h2 class="text-blue-600 text-2xl font-bold mb-4">🎯 Misi</h2>
    <ul class="list-disc pl-6 space-y-2 text-justify">
      <li>Meningkatkan mutu pelayanan informasi lowongan kerja bagi siswa/alumni.</li>
      <li>Membangun kerjasama dengan dunia usaha/dunia industri (DU/DI).</li>
      <li>Menyediakan tracer study untuk memantau keterserapan lulusan.</li>
      <li>Memberikan bimbingan karir dan pelatihan kerja kepada alumni.</li>
      <li>Menjadi mitra strategis dalam penyaluran tenaga kerja yang berkualitas.</li>
    </ul>
  </div>
</section>
@endsection

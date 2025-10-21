@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative bg-blue-500 text-white text-center py-12 overflow-hidden shadow-md">
  <div class="absolute inset-0 bg-[url('{{ asset('pattern.svg') }}')] opacity-10"></div>
  <div class="relative z-10 max-w-2xl mx-auto px-4">
    <h1 class="text-3xl md:text-4xl font-bold tracking-wide drop-shadow-sm">
      Visi & Misi BKK SMKN 1 Purwosari
    </h1>
    <p class="mt-3 text-base md:text-lg text-blue-100 font-light">
      Menjadi jembatan unggul antara dunia pendidikan dan dunia kerja
    </p>
    <div class="mt-5 w-20 h-1 bg-blue-800 mx-auto rounded-full"></div>
  </div>
</section>


<!-- Content Section -->
<section class="bg-gradient-to-b from-gray-50 to-gray-100 py-20">
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 px-6 md:px-12">

    <!-- Visi -->
    <div class="bg-white rounded-3xl shadow-xl p-10 border border-gray-200 hover:shadow-2xl transition duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
      <div class="flex items-center mb-6">
        <div class="bg-gradient-to-r from-yellow-400 to-yellow-600 p-3 rounded-full shadow-md">
          <span class="text-white text-2xl">🌟</span>
        </div>
        <h2 class="ml-4 text-3xl font-bold text-gray-800">Visi</h2>
      </div>
      <p class="text-gray-700 leading-relaxed text-justify text-lg">
        Terwujudnya <strong class="text-blue-700">Bursa Kerja Khusus (BKK) SMKN 1 Purwosari</strong> sebagai pusat layanan informasi dan penyaluran kerja yang profesional, terpercaya, serta mampu menjembatani siswa, alumni, dan perusahaan.
      </p>
    </div>

    <!-- Misi -->
    <div class="bg-white rounded-3xl shadow-xl p-10 border border-gray-200 hover:shadow-2xl transition duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
      <div class="flex items-center mb-6">
        <div class="bg-gradient-to-r from-pink-500 to-red-600 p-3 rounded-full shadow-md">
          <span class="text-white text-2xl">🎯</span>
        </div>
        <h2 class="ml-4 text-3xl font-bold text-gray-800">Misi</h2>
      </div>
      <ul class="list-disc pl-6 space-y-3 text-gray-700 text-lg leading-relaxed text-justify">
        <li>Meningkatkan mutu pelayanan informasi lowongan kerja bagi siswa/alumni.</li>
        <li>Membangun kerjasama dengan dunia usaha/dunia industri (DU/DI).</li>
        <li>Menyediakan tracer study untuk memantau keterserapan lulusan.</li>
        <li>Memberikan bimbingan karir dan pelatihan kerja kepada alumni.</li>
        <li>Menjadi mitra strategis dalam penyaluran tenaga kerja yang berkualitas.</li>
      </ul>
    </div>

  </div>
</section>

<!-- Call to Action -->
<section class="bg-blue-500 py-8 text-center text-white">
  <div class="max-w-md mx-auto px-4">
    <h3 class="text-xl md:text-2xl font-semibold mb-2">
      Bergabunglah Bersama Kami!
    </h3>
    <p class="text-blue-100 mb-4 text-sm md:text-base leading-relaxed">
      Bersama <span class="font-semibold text-yellow-300">BKK SMKN 1 Purwosari</span>, 
      wujudkan masa depan karier yang gemilang.
    </p>
  </div>
</section>

@endsection
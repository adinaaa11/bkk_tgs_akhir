@extends('layouts.app')

@section('title', 'Motto BKK SMKN 1 Purwosari')

@section('content')
<!-- Hero Section -->
<section class="relative bg-blue-500 text-white text-center py-12 overflow-hidden shadow-md">
  <div class="absolute inset-0 bg-[url('{{ asset('pattern.svg') }}')] opacity-10"></div>
  <div class="relative z-10 max-w-2xl mx-auto px-4">
    <h1 class="text-3xl md:text-4xl font-bold tracking-wide drop-shadow-sm">
      Motto BKK SMKN 1 Purwosari
    </h1>
    <p class="mt-3 text-base md:text-lg text-blue-100 font-light">
      Mengantarkan siswa dan alumni menuju dunia kerja & industri
    </p>
    <div class="mt-5 w-20 h-1 bg-blue-800 mx-auto rounded-full"></div>
  </div>
</section>

<!-- Motto Content -->
<section class="bg-gradient-to-b from-gray-50 to-gray-100 py-20">
  <div class="container mx-auto px-6 md:px-12">
    <div class="bg-white rounded-3xl shadow-xl p-10 border border-gray-200 hover:shadow-2xl transition duration-500 transform hover:-translate-y-2 max-w-3xl mx-auto" data-aos="fade-up">
      <div class="flex items-center mb-6 justify-center">
        <div class="bg-gradient-to-r from-blue-500 to-indigo-600 p-3 rounded-full shadow-md">
          <span class="text-white text-2xl">💡</span>
        </div>
        <h2 class="ml-4 text-3xl font-bold text-gray-800">Motto Kami</h2>
      </div>
      <ul class="space-y-4 text-gray-700 text-lg leading-relaxed text-justify">
        <li class="flex items-start">
          <span class="text-blue-600 mr-3">✔</span>
          <span>Siap kerja, berkarakter, dan profesional.</span>
        </li>
        <li class="flex items-start">
          <span class="text-blue-600 mr-3">✔</span>
          <span>Menjadi penghubung siswa, alumni, dan dunia industri.</span>
        </li>
        <li class="flex items-start">
          <span class="text-blue-600 mr-3">✔</span>
          <span>Melayani dengan sepenuh hati untuk masa depan cerah.</span>
        </li>
      </ul>
    </div>
  </div>
</section>
@endsection

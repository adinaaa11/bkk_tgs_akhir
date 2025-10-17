@extends('layouts.app')

@section('content')

{{-- HERO SECTION DENGAN WARNA BIRU DONGKER DAN JUDUL KUNING --}}
<section class="relative flex flex-col justify-center items-center text-center min-h-screen overflow-hidden bg-black text-blue-300">

  <!-- Background -->
  <div class="absolute inset-0">
    <img src="{{ asset('pabrik.jpg') }}" 
         alt="Background"
         class="w-full h-full object-cover scale-105 brightness-[0.95] blur-[2px]">
    <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-black/50 to-black/70"></div>
  </div>

  <!-- Efek Cahaya Biru -->
  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute top-[-100px] left-[-100px] w-[400px] h-[400px] bg-blue-700/30 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-[-120px] right-[-100px] w-[450px] h-[450px] bg-blue-500/25 rounded-full blur-3xl animate-pulse"></div>
  </div>

  <!-- Konten -->
  <div class="relative z-10 px-6 sm:px-10 max-w-3xl bg-black/40 backdrop-blur-sm rounded-3xl p-8 shadow-lg">
    <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-6 text-yellow-200 drop-shadow-[0_4px_12px_rgba(0,0,0,0.8)]">
      <span class="block text-yellow-200">BURSA KERJA KHUSUS</span>
      <span class="block text-yellow-200">SMK NEGERI 1 PURWOSARI</span>
    </h1>

    <p class="text-lg sm:text-xl text-gray-100 mb-10 leading-relaxed drop-shadow-[0_2px_6px_rgba(0,0,0,0.8)]">
      Melayani dengan <span class="font-semibold text-yellow-200">HEBAT</span> — 
      menjembatani <span class="font-semibold text-white">siswa/alumni</span> 
      dan <span class="font-semibold text-white">perusahaan</span> menuju masa depan gemilang.
    </p>

    <!-- Tombol Menyala (Tema Biru Dongker) -->
    <div class="flex flex-wrap justify-center gap-5">

      <!-- Tombol Siswa -->
      <a href="#"
         class="px-7 py-3 font-semibold rounded-full 
                bg-gradient-to-r from-blue-600 to-blue-700 text-white
                shadow-[0_0_20px_rgba(37,99,235,0.4)]
                hover:shadow-[0_0_30px_rgba(59,130,246,0.8)] hover:scale-105
                transition-all duration-300 ease-in-out">
        SISWA / ALUMNI
      </a>

      <!-- Tombol Perusahaan -->
      <a href="{{ url('perusahaan') }}"
         class="px-7 py-3 font-semibold rounded-full 
                bg-gradient-to-r from-blue-700 via-blue-600 to-blue-500 text-white
                shadow-[0_0_20px_rgba(37,99,235,0.4)]
                hover:shadow-[0_0_30px_rgba(59,130,246,0.8)] hover:scale-105
                transition-all duration-300 ease-in-out">
        PERUSAHAAN
      </a>

      <!-- Tombol Video -->
      <a href="{{ url('video-tutorial') }}"
         class="inline-flex items-center gap-2 px-7 py-3 font-medium rounded-full 
                bg-gradient-to-r from-blue-800 to-blue-600 text-white
                shadow-[0_0_20px_rgba(37,99,235,0.4)]
                hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-400 hover:text-black
                hover:shadow-[0_0_30px_rgba(59,130,246,0.8)] hover:scale-105
                transition-all duration-300 ease-in-out">
        ▶ <span>Lihat Video</span>
      </a>
    </div>
  </div>

  <!-- Garis bawah dekoratif -->
  <div class="absolute bottom-0 left-0 w-full h-[3px] bg-gradient-to-r from-transparent via-blue-500 to-transparent opacity-70"></div>
</section>

{{-- Pengantar --}}
<section class="relative py-16 bg-gradient-to-r from-gray-100 via-white to-gray-100 overflow-hidden">
  <!-- Efek hiasan -->
  <div class="absolute top-0 left-0 w-32 h-32 bg-blue-100 rounded-full blur-3xl opacity-40"></div>
  <div class="absolute bottom-0 right-0 w-40 h-40 bg-blue-200 rounded-full blur-3xl opacity-30"></div>

  <!-- Konten utama -->
  <div class="container mx-auto text-center max-w-4xl px-6 relative z-10">
    <h2 class="scroll-fade-up delay-1 text-3xl md:text-4xl font-extrabold text-blue-700 mb-6 tracking-wide">
       Selamat Datang di <span class="text-gray-800">BKK SMKN 1 Purwosari</span>
    </h2>
    <p class="scroll-fade-up delay-2 text-lg md:text-xl text-gray-700 leading-relaxed mb-6">
      <span class="font-semibold text-blue-600">Bursa Kerja Khusus (BKK)</span> hadir sebagai 
      <span class="italic text-gray-900">jembatan emas</span> antara 
      <span class="font-semibold text-blue-600">siswa, alumni, dan perusahaan</span>.  
      Melalui platform ini, informasi <span class="font-medium">lowongan kerja, kerjasama industri</span>, 
      dan <span class="font-medium">rekap data alumni</span> dapat diakses dengan mudah, cepat, dan terpercaya.
    </p>
    <p class="scroll-fade-up delay-3 text-lg text-gray-600 leading-relaxed">
      Bersama BKK SMKN 1 Purwosari, mari wujudkan masa depan yang 
      <span class="font-bold text-blue-600">unggul, berdaya saing, dan berkarakter</span>.
    </p>
  </div>
</section>

<style>
@keyframes fadeUp {
  0% { opacity: 0; transform: translateY(40px); }
  100% { opacity: 1; transform: translateY(0); }
}

.scroll-fade-up {
  opacity: 0;
  transform: translateY(40px);
}

.scroll-fade-up.show {
  animation: fadeUp 0.9s ease-out forwards;
}

/* Delay animasi agar muncul berurutan */
.delay-1 { animation-delay: 0s; }
.delay-2 { animation-delay: 0.2s; }
.delay-3 { animation-delay: 0.4s; }
</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll('.scroll-fade-up');
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
      } else {
        // Reset agar bisa muncul lagi setiap kali discroll
        entry.target.classList.remove('show');
      }
    });
  }, { threshold: 0.2 });

  elements.forEach(el => observer.observe(el));
});
</script>

{{-- Sambutan Kepala Sekolah --}}
<section class="py-16 container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center px-6 overflow-hidden">
    <!-- Foto Kepala Sekolah -->
    <div class="flex justify-center scroll-animate-left">
        <img 
            src="{{ asset('Pak.Rudi.jpeg') }}" 
            alt="Kepala Sekolah" 
            class="w-64 md:w-80 lg:w-96 rounded-xl border-4 border-blue-600 object-cover
                   shadow-lg shadow-blue-400/50 transform transition duration-700 ease-in-out hover:scale-105 hover:shadow-blue-500/60"
        />
    </div>

    <!-- Teks Sambutan -->
    <div class="scroll-animate-right">
        <h2 class="text-blue-700 text-2xl md:text-3xl font-bold mb-4">
            Sambutan Kepala SMK Negeri 1 Purwosari
        </h2>

        <p class="italic text-gray-700 text-base md:text-lg">Assalamu’alaikum Wr. Wb.</p>

        <p class="mt-3 text-gray-700 leading-relaxed text-justify text-base">
            Selamat datang di laman <strong>Bursa Kerja Khusus (BKK) SMKN 1 Purwosari</strong>. 
            Laman ini disediakan sebagai sumber informasi bagi warga sekolah dan masyarakat umum.
        </p>

        <p class="mt-3 text-gray-700 leading-relaxed text-justify text-base">
            Melalui laman ini, informasi tentang <strong>Bursa Kerja Khusus</strong> dapat diakses dengan mudah oleh siapa pun 
            yang memerlukannya. Dengan dukungan teknologi informasi yang semakin berkembang, diharapkan alumni semakin mudah 
            terhubung dengan dunia kerja.
        </p>

        <p class="italic mt-4 text-gray-700 text-base md:text-lg">Wassalamu’alaikum Wr. Wb.</p>

        <div class="mt-5">
            <h4 class="font-semibold text-blue-700 text-base md:text-lg">Rudi Tri Santoso, S.Pd., M.Pd.</h4>
            <p class="text-gray-600 text-sm">Kepala SMK Negeri 1 Purwosari</p>
        </div>
    </div>
</section>

<style>
@keyframes fadeInLeft {
  0% { opacity: 0; transform: translateX(-40px); }
  100% { opacity: 1; transform: translateX(0); }
}
@keyframes fadeInRight {
  0% { opacity: 0; transform: translateX(40px); }
  100% { opacity: 1; transform: translateX(0); }
}

.scroll-animate-left, .scroll-animate-right {
  opacity: 0;
  transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

.scroll-animate-left.show {
  animation: fadeInLeft 1s ease-out forwards;
}

.scroll-animate-right.show {
  animation: fadeInRight 1s ease-out forwards;
}
</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll('.scroll-animate-left, .scroll-animate-right');
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
      } else {
        // biar animasinya bisa muncul lagi saat discroll ulang
        entry.target.classList.remove('show');
      }
    });
  }, { threshold: 0.2 });

  elements.forEach(el => observer.observe(el));
});
</script>

{{-- Rekapitulasi --}}
<section class="py-16 bg-gray-100">
  <h2 class="text-center text-blue-600 text-3xl font-extrabold mb-12 tracking-wide p-5">
    📊 REKAPITULASI
  </h2>

  <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-8 container mx-auto px-6">
    @php
      $items = [
        ['icon' => '🔍', 'label' => 'Lowongan (Aktif)', 'count' => 231],
        ['icon' => '🏢', 'label' => 'Perusahaan (Terdaftar)', 'count' => 333],
        ['icon' => '🔗', 'label' => 'Perusahaan (MOU dgn Sekolah)', 'count' => 166],
        ['icon' => '📋', 'label' => 'Perusahaan (Skala Kota/Provinsi)', 'count' => 47],
        ['icon' => '🌍', 'label' => 'Perusahaan (Nasional/Internasional)', 'count' => 132],
        ['icon' => '🎓', 'label' => 'Total Alumni (Terdaftar)', 'count' => 6067],
        ['icon' => '💼', 'label' => 'Alumni Bekerja (Total)', 'count' => 1038],
        ['icon' => '📖', 'label' => 'Alumni Kuliah (Total)', 'count' => 734],
        ['icon' => '🚀', 'label' => 'Alumni Wirausaha (Total)', 'count' => 73],
        ['icon' => '📚', 'label' => 'Total Rombel (Aktif)', 'count' => 102],
        ['icon' => '⚙️', 'label' => 'Kompetensi Keahlian (Aktif)', 'count' => 19],
        ['icon' => '👩‍🎓', 'label' => 'Peserta Didik (Aktif)', 'count' => 1747],
      ];
    @endphp

    @foreach ($items as $index => $item)
      <div class="bg-white p-6 rounded-lg shadow text-center transform transition duration-500 hover:-translate-y-2 hover:shadow-lg"
           data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}">
        <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center rounded-full bg-blue-500 text-white text-3xl">
          {{ $item['icon'] }}
        </div>
        <div class="text-4xl text-blue-600 font-bold mb-2 counter" data-count="{{ $item['count'] }}">0</div>
        <p class="font-medium text-gray-700">{{ $item['label'] }}</p>
      </div>
    @endforeach
  </div>
</section>

<!-- Script animasi angka tiap scroll -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".counter");

  const animateCounter = (el) => {
    const target = +el.getAttribute("data-count");
    let count = 0;
    const step = target / 60;

    const update = () => {
      count += step;
      if (count < target) {
        el.textContent = Math.ceil(count);
        requestAnimationFrame(update);
      } else {
        el.textContent = target.toLocaleString();
      }
    };
    update();
  };

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
      } else {
        entry.target.textContent = "0"; // reset ke 0 saat keluar layar
      }
    });
  }, { threshold: 0.6 });

  counters.forEach(counter => observer.observe(counter));
});
</script>

<!-- AOS CDN -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init({
  duration: 1000,
  once: false, // 🔥 bisa aktif setiap scroll
  mirror: true // animasi juga saat scroll ke atas
});
</script>

{{-- Diagram Batang --}}
<section class="py-20 container mx-auto px-6">
  <h2 class="text-center text-blue-600 text-3xl font-extrabold mb-10 tracking-wide">
    Diagram Batang Rekapitulasi BKK SMKN 1 Purwosari
  </h2>

  <div class="relative w-full max-w-6xl mx-auto h-[520px] flex justify-center items-center 
              bg-white rounded-2xl shadow-2xl shadow-blue-200/60 p-6 border border-gray-100">
    <canvas id="rekapChart" 
            class="opacity-0 transform scale-90 transition-all duration-700 ease-out">
    </canvas>
  </div>
</section>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  let chartInstance = null;

  function createChart() {
    const ctx = document.getElementById('rekapChart').getContext('2d');
    if (chartInstance) chartInstance.destroy();

    const dataValues = [19, 102, 1747, 231, 333, 166, 47, 132, 6067, 1200, 800, 100];
    const labels = [
      'Kompetensi Keahlian', 'Rombel', 'Peserta Didik', 'Lowongan',
      'Perusahaan Terdaftar', 'Perusahaan MOU', 'Skala Kota/Provinsi',
      'Skala Nasional/Internasional', 'Total Alumni', 'Alumni Bekerja',
      'Alumni Kuliah', 'Alumni Wirausaha'
    ];

    let currentStep = 0;
    const tempData = new Array(dataValues.length).fill(0);

    chartInstance = new Chart(ctx, {
      type: 'bar',
      data: {
        labels,
        datasets: [{
          label: 'Jumlah',
          data: tempData,
          backgroundColor: [
            '#3b82f6','#22c55e','#f59e0b','#ef4444',
            '#6366f1','#14b8a6','#f472b6','#a855f7',
            '#84cc16','#0ea5e9','#fb923c','#f43f5e'
          ],
          borderRadius: 8
        }]
      },
      options: {
        responsive: true,
        plugins: { legend: { display: false } },
        scales: {
          y: { beginAtZero: true, ticks: { color: '#374151', font: { size: 14 } } },
          x: { ticks: { color: '#374151', font: { size: 12 } } }
        },
        animation: false
      }
    });

    // Efek animasi naik satu per satu
    function animateBars() {
      if (currentStep < dataValues.length) {
        tempData[currentStep] = dataValues[currentStep];
        chartInstance.update();
        currentStep++;
        setTimeout(animateBars, 150); // delay per bar
      }
    }

    animateBars();
  }

  // Scroll observer (animasi aktif setiap kali di-scroll)
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      const canvas = entry.target;
      if (entry.isIntersecting) {
        canvas.classList.remove('opacity-0', 'scale-90');
        canvas.classList.add('opacity-100', 'scale-100');
        createChart();
      } else {
        canvas.classList.remove('opacity-100', 'scale-100');
        canvas.classList.add('opacity-0', 'scale-90');
      }
    });
  }, { threshold: 0.5 });

  observer.observe(document.getElementById('rekapChart'));
</script>

<footer class="bg-blue-400">
  <div class="container mx-auto flex flex-col items-center justify-center px-6 py-4 text-gray-900 text-center">
    
    <!-- Copyright -->
    <p class="text-sm mb-3">
      © {{ date('Y') }} <span class="font-semibold">BKK SMKN 1 Purwosari</span>. All rights reserved.
    </p>

    <!-- Social Links -->
    <div class="flex space-x-4">
      <a href="#" class="text-gray-800 hover:text-gray-900 transition">
        <i class="bi bi-facebook text-lg"></i>
      </a>
      <a href="#" class="text-gray-800 hover:text-gray-900 transition">
        <i class="bi bi-instagram text-lg"></i>
      </a>
      <a href="#" class="text-gray-800 hover:text-gray-900 transition">
        <i class="bi bi-twitter-x text-lg"></i>
      </a>
      <a href="#" class="text-gray-800 hover:text-gray-900 transition">
        <i class="bi bi-github text-lg"></i>
      </a>
      <a href="#" class="text-gray-800 hover:text-gray-900 transition">
        <i class="bi bi-youtube text-lg"></i>
      </a>
    </div>
  </div>
</footer>

@endpush

<nav id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-white">
  <div class="container mx-auto flex justify-between items-center px-6 py-3">

    <!-- Logo -->
    <div class="flex items-center">
      <img id="logo" 
          src="{{ asset('logo.smk.png') }}" 
          class="w-12 h-12 rounded-full object-contain shadow-md transition-all duration-300 border-2 border-[#b3d4fc] bg-white p-1" 
          alt="logo">
    </div>

    <!-- Menu desktop -->
    <ul class="hidden md:flex gap-6 text-[15px] font-semibold items-center tracking-wide">
      <li><a href="/" class="nav-link">Beranda</a></li>
      <li class="relative group">
        <button class="nav-link">Profil ▾</button>
        <ul class="absolute hidden group-hover:block bg-white shadow-lg rounded-md mt-2 w-48 text-sm z-50 divide-y divide-gray-200">
          <li><a href="/visi-misi" class="dropdown-link">Visi Misi BKK</a></li>
          <li><a href="/program-kerja" class="dropdown-link">Program Kerja</a></li>
          <li><a href="/motto" class="dropdown-link">Motto BKK</a></li>
          <li><a href="/struktur" class="dropdown-link">Struktur Organisasi</a></li>
        </ul>
      </li>
      <li><a href="/lowongan" class="nav-link">Lowongan</a></li>
      <li><a href="/perusahaan" class="nav-link">Perusahaan</a></li>
      <li><a href="/survey" class="nav-link">Survey Kepuasan</a></li>
      <li class="relative group">
        <button class="nav-link">Informasi ▾</button>
        <ul class="absolute hidden group-hover:block bg-white shadow-lg rounded-md mt-2 w-56 text-sm z-50 divide-y divide-gray-200">
          <li><a href="/berita" class="dropdown-link">Berita Terbaru</a></li>
          <li><a href="/pengumuman" class="dropdown-link">Pengumuman</a></li>
          <li><a href="/galeri" class="dropdown-link">Galeri/Kegiatan</a></li>
          <li><a href="/testimoni" class="dropdown-link">Testimoni</a></li>                  
          <li><a href="/tracer" class="dropdown-link">Tracer Study</a></li>
          <li><a href="/statistik" class="dropdown-link">Statistik</a></li>
        </ul>
      </li>
      <li><a href="/faq" class="nav-link">FAQ</a></li>
      <li><a href="/kontak" class="nav-link">Kontak</a></li>
      <li><a href="/video-tutorial" class="nav-link">Video Tutorial</a></li>

      @auth
        <li><a href="/dashboard" class="text-blue-700 font-bold text-[15px] hover:scale-105 transition-transform">Dashboard</a></li>
      @else
        <li><a href="{{ route('login') }}" class="nav-link">Login</a></li>
      @endauth
    </ul>
  </div>
</nav>

<!-- Style -->
<style>
  body {
    font-family: 'Poppins', 'Inter', sans-serif;
  }

  /* NAV LINK */
  .nav-link {
    position: relative;
    padding: 6px 0;
    color: #1e3a8a; /* biru navy */
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    letter-spacing: 0.3px;
  }

  /* garis bawah */
  .nav-link::after {
    content: "";
    position: absolute;
    left: 50%;
    bottom: -3px;
    width: 0%;
    height: 2px;
    background: #b3d4fc; /* biru muda seperti navbar */
    transition: all 0.3s ease;
    transform: translateX(-50%);
    border-radius: 2px;
  }

  /* hover efek */
  .nav-link:hover {
    color: #2563eb; /* biru sedang */
    transform: translateY(-2px);
  }

  .nav-link:hover::after {
    width: 100%;
  }

  /* efek aktif */
  .nav-link.active {
    color: #2563eb; /* biru cerah */
    animation: pulseBlue 0.4s ease; /* animasi klik */
  }

  .nav-link.active::after {
    width: 100%;
    background: #2563eb; /* biru aktif */
  }

  /* animasi klik */
  @keyframes pulseBlue {
    0% { color: #1e3a8a; transform: scale(1); }
    50% { color: #2563eb; transform: scale(1.08); }
    100% { color: #2563eb; transform: scale(1); }
  }

  /* dropdown */
  .dropdown-link {
    display: block;
    padding: 10px 14px;
    font-size: 14px;
    color: #1f2937;
    transition: all 0.2s ease;
  }

  .dropdown-link:hover {
    background: #2563eb;
    color: white;
  }
</style>

<script>
  // efek scroll navbar
  window.addEventListener('scroll', () => {
    const navbar = document.getElementById('navbar');
    const logo = document.getElementById('logo');
    if (window.scrollY > 50) {
      navbar.classList.add('bg-blue-200', 'shadow-md');
      navbar.classList.remove('bg-white');
      logo.classList.remove('border-[#b3d4fc]');
      logo.classList.add('border-white');
    } else {
      navbar.classList.add('bg-white');
      navbar.classList.remove('bg-blue-200', 'shadow-md');
      logo.classList.remove('border-white');
      logo.classList.add('border-[#b3d4fc]');
    }
  });

  // animasi klik menu navbar
  const navLinks = document.querySelectorAll('.nav-link');
  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      navLinks.forEach(l => l.classList.remove('active'));
      link.classList.add('active');
    });
  });
</script>

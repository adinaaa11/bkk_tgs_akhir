<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? 'BKK SMKN 1 Purwosari' }}</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

  <!-- Navbar -->
  <x-navbar />

  <!-- Konten -->
  <main class="pt-20">
    @yield('content')
  </main>

  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS (opsional, buat animasi) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


  @stack('scripts')
</body>
</html>


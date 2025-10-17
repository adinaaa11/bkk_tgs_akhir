<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? 'Admin BKK' }}</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex">

  <!-- Sidebar -->
  <x-admin-sidebar />

  <!-- Konten -->
  <main class="flex-1 ml-64 p-6">
    @yield('content')
  </main>

</body>
</html>

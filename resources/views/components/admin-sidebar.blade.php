<aside class="w-64 h-screen bg-gray-900 text-white fixed left-0 top-0 flex flex-col shadow-lg">
  <!-- Logo -->
  <div class="flex items-center gap-3 px-4 py-5 border-b border-gray-700">
    <img src="{{ asset('logo.png') }}" class="w-10 h-10 rounded-full" alt="logo">
    <span class="font-bold text-lg">Admin BKK</span>
  </div>

  <!-- Menu -->
  <nav class="flex-1 p-4">
    <ul class="space-y-2">
      <li><a href="{{ route('admin.dashboard') }}" class="block px-3 py-2 rounded hover:bg-gray-700 {{ request()->is('admin/dashboard') ? 'bg-gray-700' : '' }}">Dashboard</a></li>
      <li><a href="{{ route('admin.lowongan.index') }}" class="block px-3 py-2 rounded hover:bg-gray-700 {{ request()->is('admin/lowongan*') ? 'bg-gray-700' : '' }}">Lowongan</a></li>
      <li><a href="{{ route('admin.perusahaan.index') }}" class="block px-3 py-2 rounded hover:bg-gray-700 {{ request()->is('admin/perusahaan*') ? 'bg-gray-700' : '' }}">Perusahaan</a></li>
      <li><a href="{{ route('admin.informasi.index') }}" class="block px-3 py-2 rounded hover:bg-gray-700 {{ request()->is('admin/informasi*') ? 'bg-gray-700' : '' }}">Informasi</a></li>
      <li><a href="{{ route('admin.users.index') }}" class="block px-3 py-2 rounded hover:bg-gray-700 {{ request()->is('admin/users*') ? 'bg-gray-700' : '' }}">Manajemen User</a></li>
    </ul>
  </nav>

  <!-- Logout -->
  <div class="p-4 border-t border-gray-700">
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="w-full text-left px-3 py-2 rounded bg-red-600 hover:bg-red-700">Logout</button>
    </form>
  </div>
</aside>

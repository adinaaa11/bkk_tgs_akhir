@extends('layouts.app')

@section('title', 'Daftar Perusahaan')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-gray-50 to-gray-100 py-16 px-6">

    <!-- Hero Section -->
    <div class="text-center max-w-3xl mx-auto mb-16">
        <h1 class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-blue-700">
            🌐 Daftar Perusahaan
        </h1>
        <p class="mt-4 text-lg text-gray-600">
            Temukan berbagai perusahaan mitra kami yang siap membuka peluang karir untukmu.
        </p>
    </div>

    <!-- Form Pencarian + Dropdown PT -->
    <div class="max-w-3xl mx-auto mb-12">
        <form action="{{ route('perusahaan.index') }}" method="GET" class="grid grid-cols-1 md:grid-cols-3 gap-3">

            <!-- Input Pencarian -->
            <div class="md:col-span-2 flex gap-3">
                <input type="text" name="search" value="{{ request('search') }}"
                    class="flex-grow px-5 py-3 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition"
                    placeholder="🔍 Cari perusahaan...">
                <button 
                    class="bg-gradient-to-r from-blue-400 to-blue-500 text-white px-6 py-3 rounded-xl shadow-md hover:shadow-lg hover:scale-[1.03] transition">
                    Cari
                </button>
            </div>

            <!-- Dropdown Daftar PT di Indonesia -->
            <div>
                <select name="nama_pt" onchange="this.form.submit()"
                    class="w-full px-5 py-3 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition">
                    <option value="">🏢 Semua PT di Indonesia</option>
                    <option value="PT Telkom Indonesia" {{ request('nama_pt') == 'PT Telkom Indonesia' ? 'selected' : '' }}>📡 PT Telkom Indonesia</option>
                    <option value="PT Pertamina" {{ request('nama_pt') == 'PT Pertamina' ? 'selected' : '' }}>⛽ PT Pertamina</option>
                    <option value="PT PLN" {{ request('nama_pt') == 'PT PLN' ? 'selected' : '' }}>⚡ PT PLN (Persero)</option>
                    <option value="PT Astra International" {{ request('nama_pt') == 'PT Astra International' ? 'selected' : '' }}>🚗 PT Astra International</option>
                    <option value="PT Indofood Sukses Makmur" {{ request('nama_pt') == 'PT Indofood Sukses Makmur' ? 'selected' : '' }}>🍜 PT Indofood Sukses Makmur</option>
                    <option value="PT Garuda Indonesia" {{ request('nama_pt') == 'PT Garuda Indonesia' ? 'selected' : '' }}>✈️ PT Garuda Indonesia</option>
                    <option value="PT Freeport Indonesia" {{ request('nama_pt') == 'PT Freeport Indonesia' ? 'selected' : '' }}>⛏️ PT Freeport Indonesia</option>
                    <option value="PT Unilever Indonesia" {{ request('nama_pt') == 'PT Unilever Indonesia' ? 'selected' : '' }}>🧴 PT Unilever Indonesia</option>
                    <option value="PT Bank Mandiri" {{ request('nama_pt') == 'PT Bank Mandiri' ? 'selected' : '' }}>🏦 PT Bank Mandiri</option>
                    <option value="PT Bank BRI" {{ request('nama_pt') == 'PT Bank BRI' ? 'selected' : '' }}>💰 PT Bank BRI</option>
                    <option value="PT Bank BCA" {{ request('nama_pt') == 'PT Bank BCA' ? 'selected' : '' }}>💳 PT Bank BCA</option>
                    <option value="PT Kimia Farma" {{ request('nama_pt') == 'PT Kimia Farma' ? 'selected' : '' }}>💊 PT Kimia Farma</option>
                    <option value="PT Bukalapak" {{ request('nama_pt') == 'PT Bukalapak' ? 'selected' : '' }}>🛍️ PT Bukalapak</option>
                    <option value="PT Tokopedia" {{ request('nama_pt') == 'PT Tokopedia' ? 'selected' : '' }}>🐸 PT Tokopedia</option>
                    <option value="PT Gojek Indonesia" {{ request('nama_pt') == 'PT Gojek Indonesia' ? 'selected' : '' }}>🛵 PT Gojek Indonesia</option>
                    <option value="PT Shopee Indonesia" {{ request('nama_pt') == 'PT Shopee Indonesia' ? 'selected' : '' }}>🛒 PT Shopee Indonesia</option>
                </select>
            </div>
        </form>
    </div>

    <!-- Grid Perusahaan -->
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-8">
        @forelse($perusahaans as $perusahaan)
            <div class="bg-white/90 backdrop-blur-md p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl hover:scale-[1.02] transition">
                <div class="flex items-center gap-4 mb-4">
                    @if($perusahaan->logo)
                        <img src="{{ asset('storage/' . $perusahaan->logo) }}" alt="Logo {{ $perusahaan->nama }}"
                            class="w-16 h-16 object-cover rounded-full border border-gray-200 shadow-sm">
                    @else
                        <div class="w-16 h-16 flex items-center justify-center rounded-full bg-blue-100 text-blue-500 font-bold text-lg">
                            {{ strtoupper(substr($perusahaan->nama, 0, 1)) }}
                        </div>
                    @endif
                    <div>
                        <h2 class="text-xl font-bold text-gray-800">{{ $perusahaan->nama }}</h2>
                        <p class="text-sm text-gray-500">{{ $perusahaan->bidang }}</p>
                    </div>
                </div>
                <p class="text-gray-600 leading-relaxed mb-4 line-clamp-3">
                    {{ $perusahaan->deskripsi }}
                </p>
                <a href="{{ route('perusahaan.show', $perusahaan->id) }}"
                   class="inline-block bg-gradient-to-r from-blue-400 to-blue-500 text-white px-4 py-2 rounded-xl shadow-md hover:shadow-lg hover:scale-[1.02] transition">
                    Lihat Detail
                </a>
            </div>
        @empty
            <p class="text-center text-gray-500 col-span-full">🚫 Belum ada perusahaan yang tersedia.</p>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="mt-12">
        {{ $perusahaans->links() }}
    </div>

</div>
@endsection

@extends('layouts.app')

@section('title', 'FAQ - Pertanyaan yang Sering Diajukan')

@section('content')
<div class="container mx-auto py-16 px-6 max-w-4xl">
    <h1 class="text-4xl font-extrabold text-center text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600 mb-10">
        ❓ Pertanyaan yang Sering Diajukan (FAQ)
    </h1>

    <div class="space-y-6">
        @forelse($faqs as $faq)
            <div class="bg-white/90 backdrop-blur-md p-6 rounded-2xl shadow-lg border border-gray-100">
                <button type="button"
                        class="w-full text-left font-semibold text-lg text-gray-800 flex justify-between items-center"
                        onclick="toggleAnswer(this)">
                    {{ $faq->pertanyaan }}
                    <span class="text-gray-500 transition-transform duration-300">▼</span>
                </button>
                <div class="mt-3 hidden text-gray-700 leading-relaxed">
                    {!! nl2br(e($faq->jawaban)) !!}
                </div>
            </div>
        @empty
            <p class="text-center text-gray-500">🚫 Belum ada FAQ yang tersedia.</p>
        @endforelse
    </div>
</div>

<script>
function toggleAnswer(button) {
    const answer = button.nextElementSibling;
    const icon = button.querySelector("span");
    answer.classList.toggle("hidden");
    icon.style.transform = answer.classList.contains("hidden") ? "rotate(0deg)" : "rotate(180deg)";
}
</script>
@endsection

@extends('layouts.app')

@section('title', 'FAQ - Pertanyaan yang Sering Diajukan')

@section('content')
<!-- HERO SECTION -->
<section class="bg-gradient-to-r from-sky-400 to-blue-500 text-white text-center py-20 shadow-md">
    <h1 class="text-5xl font-extrabold mb-4 drop-shadow-lg">
         Pertanyaan yang Sering Diajukan (FAQ)
    </h1>
    <p class="text-lg opacity-90">
        Temukan jawaban seputar BKK SMKN 1 Purwosari di sini
    </p>
    <div class="mt-6 mx-auto w-24 h-1 bg-white rounded-full"></div>
</section>

<!-- KONTEN FAQ -->
<div class="container mx-auto py-16 px-6 max-w-5xl space-y-6">

    <!-- FAQ ITEM -->
    @php
        $faqs = [
            ['pertanyaan' => 'Apa itu BKK SMKN 1 Purwosari?',
             'jawaban' => 'BKK (Bursa Kerja Khusus) SMKN 1 Purwosari adalah wadah yang membantu lulusan sekolah dalam mendapatkan informasi dan kesempatan kerja di dunia industri.'],

            ['pertanyaan' => 'Siapa yang bisa bergabung dengan BKK SMKN 1 Purwosari?',
             'jawaban' => 'Semua siswa dan alumni SMKN 1 Purwosari dapat bergabung untuk mendapatkan informasi lowongan kerja dan pelatihan.'],

            ['pertanyaan' => 'Bagaimana cara mendaftar ke BKK?',
             'jawaban' => 'Pendaftaran dapat dilakukan melalui website resmi BKK SMKN 1 Purwosari dengan mengisi formulir online di menu “Pendaftaran BKK”.'],

            ['pertanyaan' => 'Apakah ada biaya untuk bergabung dengan BKK?',
             'jawaban' => 'Tidak, semua layanan BKK SMKN 1 Purwosari bersifat gratis untuk siswa dan alumni.'],

            ['pertanyaan' => 'Apakah BKK bekerja sama dengan perusahaan?',
             'jawaban' => 'Ya, BKK SMKN 1 Purwosari bekerja sama dengan berbagai perusahaan dan instansi untuk penyaluran tenaga kerja dan program rekrutmen.'],

            ['pertanyaan' => 'Bagaimana cara melihat lowongan kerja terbaru?',
             'jawaban' => 'Kamu bisa melihat lowongan kerja di halaman “Lowongan” pada website resmi BKK atau media sosial BKK SMKN 1 Purwosari.'],

            ['pertanyaan' => 'Apakah ada pelatihan sebelum ditempatkan kerja?',
             'jawaban' => 'Ya, BKK biasanya menyelenggarakan pelatihan soft skill, wawancara, dan uji kompetensi sebelum proses penempatan kerja.'],

            ['pertanyaan' => 'Bagaimana cara menghubungi BKK SMKN 1 Purwosari?',
             'jawaban' => 'Kamu bisa menghubungi melalui halaman “Kontak” di website resmi, email, atau datang langsung ke kantor BKK di area sekolah.'],

            ['pertanyaan' => 'Apakah BKK membantu magang industri?',
             'jawaban' => 'Benar, BKK juga memfasilitasi program magang dan prakerin bagi siswa untuk mengenal dunia kerja secara langsung.'],

            ['pertanyaan' => 'Apakah alumni yang sudah bekerja masih bisa memanfaatkan BKK?',
             'jawaban' => 'Ya, alumni tetap dapat memanfaatkan layanan BKK untuk pengembangan karier atau mencari peluang kerja baru.']
        ];
    @endphp

    @foreach($faqs as $faq)
        <div class="bg-gradient-to-r from-sky-50 via-white to-blue-50 p-6 rounded-3xl shadow-lg border border-sky-200 hover:shadow-2xl transition transform hover:-translate-y-1">
            <button type="button"
                    class="w-full text-left font-semibold text-lg md:text-xl text-sky-900 flex justify-between items-center"
                    onclick="toggleAnswer(this)">
                <span>{{ $faq['pertanyaan'] }}</span>
                <span class="icon transition-transform duration-300 text-sky-500">+</span>
            </button>
            <div class="mt-3 max-h-0 overflow-hidden transition-all duration-500 ease-in-out text-gray-700 leading-relaxed text-base">
                {{ $faq['jawaban'] }}
            </div>
        </div>
    @endforeach
</div>

<!-- Script animasi toggle -->
<script>
function toggleAnswer(button) {
    const answer = button.nextElementSibling;
    const icon = button.querySelector(".icon");

    if (answer.style.maxHeight && answer.style.maxHeight !== "0px") {
        answer.style.maxHeight = "0px";
        icon.textContent = "+";
    } else {
        document.querySelectorAll(".space-y-6 div > div").forEach(el => {
            el.style.maxHeight = "0px";
        });
        document.querySelectorAll(".icon").forEach(ic => ic.textContent = "+");
        answer.style.maxHeight = answer.scrollHeight + "px";
        icon.textContent = "−";
    }
}
</script>
@endsection

@extends('layouts.app')

@section('title', 'Konsultasi - Layanan Konsultasi Profesional')

@section('content')
<section class="bg-indigo-600 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="max-w-3xl text-left">
            
            <span class="bg-indigo-600 text-white text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">
                ✦ Platform Konsultasi #1 Indonesia
            </span>

            <h1 class="mt-6 text-4xl md:text-5xl font-extrabold text-white leading-tight">
                Konsultasi dengan <br> <span class="text-yellow-300">Para Ahli Terbaik</span> Kapan Saja
            </h1>

            <p class="mt-4 text-indigo-100 text-lg">
                Temukan pakar hukum, desainer, developer, konsultan keuangan & lebih. <br class="hidden md:block"> 
                Jadwalkan sesi dalam hitungan menit.
            </p>

            <div class="mt-10 relative max-w-2xl">
                <input type="text" 
                       class="w-full bg-white py-4 pl-6 pr-32 rounded-full shadow-xl focus:outline-none focus:ring-4 focus:ring-indigo-400 transition-all text-gray-800"
                       placeholder="Cari: hukum, coding, desain interior...">
                
                <button class="absolute right-2 top-2 bottom-2 bg-indigo-600 text-white px-6 rounded-full font-bold hover:bg-indigo-700 transition-colors">
                    Cari Expert
                </button>
            </div>

            <div class="mt-8 flex flex-wrap justify-start gap-2">
                <button class="bg-white/20 hover:bg-white/30 text-white text-xs py-2 px-4 rounded-full border border-white/30 transition-all">Konsultasi Hukum</button>
                <button class="bg-white/20 hover:bg-white/30 text-white text-xs py-2 px-4 rounded-full border border-white/30 transition-all">Desain Interior</button>
                <button class="bg-white/20 hover:bg-white/30 text-white text-xs py-2 px-4 rounded-full border border-white/30 transition-all">Teknologi & Coding</button>
            </div>
        </div>
    </div>
</section>
<section class="bg-white py-12 border-b border-gray-200 shadow-sm relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-gray-100">
                
                <div class="py-4 md:py-0">
                    <p class="text-4xl font-extrabold text-indigo-600">7+</p>
                    <p class="mt-2 text-sm font-medium text-gray-500">Expert Terverifikasi</p>
                </div>

                <div class="py-4 md:py-0">
                    <p class="text-4xl font-extrabold text-indigo-600">2+</p>
                    <p class="mt-2 text-sm font-medium text-gray-500">Konsultasi Selesai</p>
                </div>

                <div class="py-4 md:py-0">
                    <p class="text-4xl font-extrabold text-indigo-600">7</p>
                    <p class="mt-2 text-sm font-medium text-gray-500">Kategori Keahlian</p>
                </div>

                <div class="py-4 md:py-0">
                    <p class="text-4xl font-extrabold text-indigo-600">3+</p>
                    <p class="mt-2 text-sm font-medium text-gray-500">Pengguna Aktif</p>
                </div>

            </div>
        </div>
    </section>
    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Pilih Kategori Keahlian</h2>
                <p class="mt-4 text-gray-600">Temukan konsultan yang tepat untuk menyelesaikan masalahmu.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                
                <a href="#" class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md hover:border-indigo-500 transition-all group">
                    <div class="w-12 h-12 bg-indigo-50 rounded-lg flex items-center justify-center mb-4 group-hover:bg-indigo-600 transition-colors">
                        <svg class="w-6 h-6 text-indigo-600 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-1">IT & Coding</h3>
                    <p class="text-sm text-gray-500">12 Expert</p>
                </a>

                <a href="#" class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md hover:border-indigo-500 transition-all group">
                    <div class="w-12 h-12 bg-indigo-50 rounded-lg flex items-center justify-center mb-4 group-hover:bg-indigo-600 transition-colors">
                        <svg class="w-6 h-6 text-indigo-600 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-1">Hukum & Legal</h3>
                    <p class="text-sm text-gray-500">8 Expert</p>
                </a>

                <a href="#" class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md hover:border-indigo-500 transition-all group">
                    <div class="w-12 h-12 bg-indigo-50 rounded-lg flex items-center justify-center mb-4 group-hover:bg-indigo-600 transition-colors">
                        <svg class="w-6 h-6 text-indigo-600 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-1">Desain Interior</h3>
                    <p class="text-sm text-gray-500">5 Expert</p>
                </a>

                <a href="#" class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md hover:border-indigo-500 transition-all group">
                    <div class="w-12 h-12 bg-indigo-50 rounded-lg flex items-center justify-center mb-4 group-hover:bg-indigo-600 transition-colors">
                        <svg class="w-6 h-6 text-indigo-600 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-1">Keuangan</h3>
                    <p class="text-sm text-gray-500">10 Expert</p>
                </a>
            </div>
        </div>
    </section>
@endsection
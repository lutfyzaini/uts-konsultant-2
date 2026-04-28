@extends('layouts.app')

@section('content')
<section class="bg-indigo-600 pt-16 pb-20 px-4">
    <div class="max-w-7xl mx-auto text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Temukan Ahli Terbaik</h1>
        <p class="text-indigo-100 mb-10 text-lg">Konsultasi 1-on-1 dengan praktisi berpengalaman di bidangnya.</p>
        
        <div class="max-w-4xl mx-auto bg-white rounded-2xl p-2 flex flex-col md:flex-row gap-2 shadow-2xl">
            <form action="{{ route('ahli.index') }}" method="GET" class="flex flex-col md:flex-row w-full gap-2">
                
                <div class="flex-1 flex items-center px-4 bg-white rounded-xl border md:border-none">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama atau keahlian..." class="w-full border-none focus:ring-0 text-gray-700 bg-transparent py-3 outline-none">
                </div>
                
                <div class="hidden md:block w-px bg-gray-200 my-2"></div>
                
                <div class="flex-1 flex items-center px-4 bg-white rounded-xl border md:border-none">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    <select name="category" class="w-full border-none focus:ring-0 text-gray-700 bg-transparent py-3 outline-none cursor-pointer">
                        <option value="">Semua Kategori</option>              
                        @foreach($categories as $kat)
                            <option value="{{ $kat->id }}" {{ request('category') == $kat->id ? 'selected' : '' }}>
                                {{ $kat->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                                
                <button type="submit" class="bg-indigo-800 hover:bg-indigo-900 text-white font-bold py-3 px-8 rounded-xl transition duration-300 w-full md:w-auto">
                    Cari
                </button>
            </form>
        </div>
    </div>
</section>

<section class="bg-gray-50 py-16 px-4 min-h-screen">
    <div class="max-w-7xl mx-auto">
        
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-2xl font-bold text-gray-900">Hasil Pencarian</h2>
            <span class="text-gray-500 font-medium">{{ $semuaAhli->count() }} Ahli ditemukan</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($semuaAhli as $ahli)
            <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100 overflow-hidden flex flex-col group">
                <div class="p-6 flex-grow">
                    <div class="flex items-start gap-4 mb-5">
                        <div class="w-14 h-14 bg-indigo-100 text-indigo-600 rounded-full flex items-center justify-center text-xl font-bold flex-shrink-0">
                            {{ strtoupper(substr($ahli->user->username, 0, 2)) }}
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 group-hover:text-indigo-600 transition-colors">{{ $ahli->user->username }}</h3>
                            <p class="text-sm text-gray-500 mb-1">{{ $ahli->title }}</p>
                            <div class="flex items-center text-xs text-gray-400">
                                <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                {{ $ahli->location }}
                            </div>
                        </div>
                    </div>

                    <div class="bg-slate-50 rounded-xl p-4 mb-5 border border-slate-100">
                        <p class="text-xs text-gray-500 mb-1">Tarif Konsultasi</p>
                        <p class="text-lg font-bold text-indigo-600 mb-3">Rp {{ number_format($ahli->hourly_rate, 0, ',', '.') }} <span class="text-sm font-normal text-gray-500">/ jam</span></p>
                        
                        <div class="flex items-center gap-4 text-sm text-gray-600 border-t border-slate-200 pt-3">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-amber-400 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <span class="font-medium">4.9</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-gray-400 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                <span>{{ $ahli->experience_years }} Thn Pengalaman</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-5 pt-0">
                    <a href="{{ route('ahli.show', $ahli->id) }}" class="block w-full text-center py-2.5 px-4 bg-white border-2 border-indigo-600 text-indigo-600 font-bold rounded-xl hover:bg-indigo-600 hover:text-white transition-colors duration-300">
                        Lihat Detail
                    </a>
                </div>
            </div>

            @empty
            <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center py-16 bg-white rounded-2xl border border-dashed border-gray-300">
                <svg class="mx-auto h-16 w-16 text-gray-300 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <h3 class="text-lg font-bold text-gray-900">Ahli tidak ditemukan</h3>
                <p class="text-gray-500 mt-1">Coba gunakan kata kunci pencarian yang lain.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
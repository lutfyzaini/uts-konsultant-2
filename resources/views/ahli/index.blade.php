@extends('layouts.app')

@section('title', 'Cari Expert | Expert-Ease')

@section('content')

    <div class="bg-indigo-600 pb-24 pt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-3xl font-extrabold text-white">Temukan Expert Terbaik Untukmu</h1>
            <p class="mt-4 text-indigo-100 text-lg">Pilih dari puluhan profesional yang siap membantu menyelesaikan masalahmu.</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-12 relative z-10">
        <div class="bg-white rounded-xl shadow-md p-4 border border-gray-100 flex flex-col md:flex-row gap-4">
            <input type="text" placeholder="Cari nama expert atau keahlian..." class="flex-1 bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            
            <select class="bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <option>Semua Kategori</option>
                <option>IT & Coding</option>
                <option>Hukum & Legal</option>
                <option>Desain Interior</option>
            </select>
            
            <button class="bg-indigo-600 text-white font-bold rounded-lg px-8 py-3 hover:bg-indigo-700 transition">Cari</button>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    
    @foreach($semuaAhli as $ahli)
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-all flex flex-col">
        <div class="p-6 flex-1">
            <div class="flex items-center gap-4 mb-4">
                <img src="{{ $ahli['photo'] }}" alt="Foto" class="w-16 h-16 rounded-full object-cover border-2 border-indigo-100">
                <div>
                    <h3 class="font-bold text-lg text-gray-900">{{ $ahli['name'] }}</h3>
                    <span class="text-xs font-semibold text-indigo-600 bg-indigo-50 px-2 py-1 rounded-full">
                        {{ $ahli['category'] }}
                    </span>
                </div>
            </div>
            
            <p class="text-sm text-gray-600 mb-4 line-clamp-2">{{ $ahli['bio'] }}</p>
            
            <div class="flex justify-between items-center border-t border-gray-100 pt-4 mt-auto">
                <div>
                    <p class="text-xs text-gray-500">Tarif per sesi</p>
                    <p class="font-bold text-gray-900">Rp {{ $ahli['price'] }}</p>
                </div>
                <div class="flex items-center gap-1 text-yellow-500">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    <span class="font-bold text-sm text-gray-700">{{ $ahli['rating'] }}</span>
                </div>
            </div>
        </div>
        
        <a href="{{ route('ahli.detail') }}" class="block w-full bg-slate-50 text-center py-3 text-indigo-600 font-bold border-t border-gray-100 hover:bg-indigo-600 hover:text-white transition-colors">
            Lihat Jadwal
        </a>
    </div>
    @endforeach 
</div>  
</div>

@endsection
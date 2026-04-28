@extends('layouts.app')

@section('title', 'Detail Expert | Expert-Ease')

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-100 mt-10 mb-20 overflow-hidden w-[90%] md:w-[70vw] mx-auto max-w-4xl">
    
    <div class="px-6 py-4 border-b border-gray-100 bg-indigo-50">
        <h3 class="font-bold text-indigo-900 text-lg">Informasi Profil Ahli</h3>
    </div>
    
    <div class="p-6 space-y-8"> <dl class="grid grid-cols-1 gap-x-4 gap-y-6 sm:grid-cols-2">
            
            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-gray-500">Nama Lengkap</dt>
                <dd class="mt-1 text-lg text-gray-900 font-bold">{{ $expert->user->username }}</dd>
            </div>

            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-gray-500">Spesialisasi</dt>
                <dd class="mt-1 text-sm text-gray-900 font-semibold">{{ $expert->title }}</dd>
            </div>

            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-gray-500">Pengalaman</dt>
                <dd class="mt-1 text-sm text-gray-900 font-semibold">{{ $expert->experience_years }} Tahun</dd>
            </div>

            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-gray-500">Lokasi Praktik</dt>
                <dd class="mt-1 text-sm text-gray-900 font-semibold">{{ $expert->location }}</dd>
            </div>

            <div class="sm:col-span-2 border-t border-gray-50 pt-4">
                <dt class="text-sm font-medium text-gray-500">Biografi Singkat</dt>
                <dd class="mt-1 text-sm text-gray-900 leading-relaxed">
                    {{ $expert->bio }}
                </dd>
            </div>

        </dl>

        <div class="border-t border-gray-100 pt-6">
            <h3 class="font-bold text-gray-900 mb-4 flex items-center">
                <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                Jadwal Tersedia
            </h3>
            
            @if($expert->availabilities && $expert->availabilities->count() > 0)
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    @foreach($expert->availabilities as $jadwal)
                        <li class="p-3 border border-indigo-100 bg-indigo-50/30 rounded-lg flex justify-between items-center hover:bg-indigo-50 transition">
                            <span class="font-medium text-gray-700">{{ $jadwal->day_of_week }}</span>
                            <span class="font-bold text-indigo-700 bg-white px-2 py-1 rounded shadow-sm text-sm">
                                {{ \Carbon\Carbon::parse($jadwal->start_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($jadwal->end_time)->format('H:i') }}
                            </span>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="p-4 bg-gray-50 rounded-lg text-center text-gray-500 border border-dashed border-gray-300">
                    Belum ada jadwal yang ditambahkan untuk ahli ini.
                </div>
            @endif
        </div>
        
        <div class="pt-4">
            <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-4 rounded-xl shadow-lg shadow-indigo-200 transition-all">
                Booking Sesi Sekarang (Rp {{ number_format($expert->hourly_rate, 0, ',', '.') }})
            </button>
        </div>

    </div>
</div>
@endsection
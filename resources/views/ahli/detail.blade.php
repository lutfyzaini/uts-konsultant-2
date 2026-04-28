@extends('layouts.app')

@section('title', 'Detail Expert | Expert-Ease')

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-100 mt-6 overflow-hidden w-[70vw] m-auto max-w-7xl">
    <div class="px-6 py-4 border-b border-gray-100 bg-gray-50">
        <h3 class="font-bold text-gray-900">Informasi Profesional</h3>
    </div>
    
    <div class="p-6">
        <dl class="grid grid-cols-1 gap-x-4 gap-y-6 sm:grid-cols-2">
            
            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-gray-500">Pendidikan Terakhir</dt>
                <dd class="mt-1 text-sm text-gray-900 font-semibold">Magister Hukum - Universitas Indonesia</dd>
            </div>

            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-gray-500">Nomor Anggota Profesi</dt>
                <dd class="mt-1 text-sm text-gray-900 font-semibold">PERADI - 123456789</dd>
            </div>

            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-gray-500">Bahasa</dt>
                <dd class="mt-1 text-sm text-gray-900 font-semibold">Indonesia, Inggris, Jepang</dd>
            </div>

            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-gray-500">Waktu Respon Rata-rata</dt>
                <dd class="mt-1 text-sm text-gray-900 font-semibold">~ 30 Menit</dd>
            </div>

            <div class="sm:col-span-2 border-t border-gray-50 pt-4">
                <dt class="text-sm font-medium text-gray-500">Alamat Kantor</dt>
                <dd class="mt-1 text-sm text-gray-900">
                    Gedung Menara Kuningan, Lantai 12, Jl. H.R. Rasuna Said, Jakarta Selatan.
                </dd>
            </div>

        </dl>
    </div>
</div>
@endsection
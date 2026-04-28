<?php

use App\Models\Categories;
use App\Models\Expert;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpertController;

// Ganti route lama dengan ini
Route::get('/cari-ahli', [ExpertController::class, 'index'])->name('ahli.index');
// Halaman Detail Ahli
Route::get('/cari-ahli/{id}', [ExpertController::class, 'show'])->name('ahli.show');

Route::get('/', function () {
    return view('home.index', [
        'categories' => Categories::all(),
    ]);
})->name('home');

Route::get('/detail-ahli', function () {
    return view('ahli.detail'); 
})->name('ahli.detail');
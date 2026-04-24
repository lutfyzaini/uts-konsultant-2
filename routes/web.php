<?php

use App\Models\Expert;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index'); 
})->name('home');

Route::get('/cari-ahli', function () {
    $semuaAhli = [
        [
            "name" => "Dr. Andi Hermawan",
            "category" => "Hukum & Legal",
            "price" => "250.000",
            "rating" => "4.9",
            "bio" => "Pengacara senior spesialis hukum bisnis.",
            "photo" => "https://ui-avatars.com/api/?name=Andi+Hermawan&background=1e3a8a&color=fff"
        ],
        [
            "name" => "Siska Amelia, S.Kom",
            "category" => "IT & Coding",
            "price" => "150.000",
            "rating" => "4.8",
            "bio" => "Fullstack developer spesialis Laravel.",
            "photo" => "https://ui-avatars.com/api/?name=Siska+Amelia&background=1e3a8a&color=fff"
        ],
        [
            "name" => "Budi Santoso",
            "category" => "Desain Interior",
            "price" => "200.000",
            "rating" => "4.7",
            "bio" => "Arsitek dengan gaya minimalis modern.",
            "photo" => "https://ui-avatars.com/api/?name=Budi+Santoso&background=1e3a8a&color=fff"
        ]
    ];

    return view('ahli.index', [
        "semuaAhli" => $semuaAhli
    ]);
})->name('ahli.index');

Route::get('/detail-ahli', function () {
    return view('ahli.detail'); 
})->name('ahli.detail');
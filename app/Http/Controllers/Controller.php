<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\ExpertProfile;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ExpertController extends Controller
{
    // Fungsi untuk halaman Katalog (Cari Ahli)
    public function index(Request $request)
    {
        // Ambil kata kunci dari kotak pencarian
        $search = $request->input('search');
        $categoryId = $request->input('category_id');

        // Ambil data ahli + relasi kategorinya
        $experts = ExpertProfile::with('category', 'user')
            ->when($search, function($query) use ($search) {
                $query->where('title', 'like', "%{$search}%")
                      ->orWhereHas('user', function($q) use ($search) {
                          $q->where('name', 'like', "%{$search}%");
                      });
            })
            ->when($categoryId, function($query) use ($categoryId) {
                $query->where('category_id', $categoryId);
            })
            ->get();

        // Ambil semua kategori untuk isi dropdown filter
        $categories = Categories::all();

        return view('ahli.index', compact('experts', 'categories'));
    }

    // Fungsi untuk halaman Detail satu ahli
    public function show($id)
    {
        // Cari ahli berdasarkan ID, jika tidak ada munculkan 404
        $expert = ExpertProfile::with(['category', 'user', 'skills', 'availabilities'])->findOrFail($id);
        
        return view('ahli.detail', compact('expert'));
    }
}
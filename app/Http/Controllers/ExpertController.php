<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\ExpertProfile;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ExpertController extends Controller
{
   public function index(Request $request)
    {
        $search = $request->input('search');
        $category = $request->input('category');
        $categories = Categories::all();
        $semuaAhli = ExpertProfile::with(['user', 'category'])
            ->when($search, function($query) use ($search) {
                $query->where(function($q) use ($search) {
                    $q->whereHas('user', function($uq) use ($search) {
                        $uq->where('username', 'like', "%{$search}%");
                    })->orWhere('title', 'like', "%{$search}%");
                });
            })
            ->when($category, function($query) use ($category) {
                $query->where('category_id', $category);
            })
            ->get();
        return view('ahli.index', compact('semuaAhli', 'categories'));
    }

    public function show($id)
    {
        $expert = ExpertProfile::with(['user', 'category'])->findOrFail($id);
        return view('ahli.detail', compact('expert'));
    }
}
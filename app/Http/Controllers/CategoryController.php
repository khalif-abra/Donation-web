<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category; // Pastikan untuk mengimpor model Category yang sesuai

class CategoryController extends Controller
{
    public function showPostsByCategory($category)
    {
        // Ambil postingan berdasarkan kategori
        $posts = Post::with(['category', 'author'])->whereHas('category', function ($query) use ($category) {
            $query->where('name', $category);
        })->get();

        return view('categories.show', [
            'title' => 'Category',
            'category' => $category,
            'posts' => $posts->load('category', 'author'),
        ]);
    }
}


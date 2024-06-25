<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    
    // Metode index untuk menampilkan daftar artikel dengan fitur pencarian
    public function index(Request $request)
    {
        // Mulai query untuk Post
        $query = Post::query();

        // Jika ada parameter pencarian, tambahkan kondisi pencarian
        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->input('search') . '%')->orWhere('body', 'like', '%' . request('search') . '%');
        }

        // Ambil hasil pencarian
        $posts = $query->get();

        // Kirim hasil ke view
        return view('article', [
            'title' => 'Article | For Us',
            'posts' => $posts,
            'image' => 'img/gambar4.jpg'
        ]);
    }

    public function show(Post $post)
    {
        return view('blog', [
            'title' => $post->title,
            'post' => $post
        ]);
    }

    public function showByUsername($username)
    {
        // Cari post berdasarkan username
        $post = Post::where('username', $username)->first();
    
        // Jika post tidak ditemukan, tampilkan halaman 404
        if (!$post) {
            abort(404);
        }
    
        // Kirim data post ke view 'blog'
        return view('blog', [
            'post' => $post
        ]);
    }
}


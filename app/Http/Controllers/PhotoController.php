<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Photos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Photos $photos)
    {
                // Ambil API Key dari .env file
                $clientId = env('UNSPLASH_ACCESS_KEY');
                \Log::info('API Key: ' . $clientId);
        
                // Buat permintaan ke Unsplash API untuk gambar acak
                $response = Http::get("https://api.unsplash.com/photos/random", [
                    'client_id' => $clientId
                ]);
        
                if ($response->successful()) {
                    $photo = $response->json();
                    $photoUrl = $photo['urls']['regular'];
                    \Log::info('Photo URL: ' . $photoUrl);
        
                    // Ambil postingan (misalnya model Post)
                    $posts = Post::all();
        
                    // Debug untuk memastikan data dikirim ke view
                    \Log::info('Posts Count: ' . $posts->count());
        
                    return view('photos.random', ['photoUrl' => $photoUrl, 'posts' => $posts]);
                } else {
                    \Log::error('Failed to fetch photo from Unsplash.');
                    return view('photos.random', ['photoUrl' => 'https://via.placeholder.com/150', 'posts' => []]);
                }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Photos $photos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photos $photos)
    {
        //
    }

    public function getRandomPhoto()
    {

    }
}

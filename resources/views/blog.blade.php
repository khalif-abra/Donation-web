@extends('layout.Blog_article')

@section('article_content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                <div class="col-1 d-none d-md-block border-right"></div> <!-- Garis vertikal di sebelah kiri konten, hanya ditampilkan di desktop (medium dan lebih besar) -->
                <div class="col-12 col-md-10">
                    <h1 class="text-center mb-5 my-5">{{ $post->title }}</h1>
                    <p>
                        By: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none text-black">{{ $post->author->name }}</a>
                        In <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
                    </p>
                    {!! $post->body !!}
                    <img class="my-3 img-fluid" src="https://images.unsplash.com/photo-1719263233866-a4e4908cf3af?q=80&fit=crop&w=1200&h=800" style="object-fit: cover;" alt="Gambar Persegi Panjang">
                    {!! $post->body !!}
                    <img class="my-3 mx-auto d-block img-fluid" src="https://images.unsplash.com/photo-1719176372654-352eaa75f065?w=1200&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyMHx8fGVufDB8fHx8fA%3D%3D" style="object-fit: cover;" alt="Gambar Persegi Panjang">
                </div>
                <div class="col-1 d-none d-md-block border-left"></div> <!-- Garis vertikal di sebelah kanan konten, hanya ditampilkan di desktop (medium dan lebih besar) -->
            </div>
        </div>
    </div>
</div>




@endsection

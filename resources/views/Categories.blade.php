@extends('layout.content')

@section('content')
<div class="container">

    {{-- <h2 class="text-item text-center mt-3 my-4">Category: {{ $category }}</h2> <!-- Judul untuk halaman web --> --}}
    
<!-- Categories.blade.php -->

<!-- Categories.blade.php -->

@if ($post->count() > 0)
    @php
        $currentCategory = null;
    @endphp

    @foreach ($post as $post)
        @if ($currentCategory !== $post->category->name)
            <!-- Tampilkan judul kategori hanya jika kategori berbeda -->
            <h2 class="text-item text-center mt-3 my-4">Category: {{ $post->category->name }}</h2>
            @php
                $currentCategory = $post->category->name;
            @endphp
        @endif

        <article class="border-bottom pb-4 mt-3">
            <h5><a href="/blog/{{ $post->slug }}" class="text-decoration-none text-black">{{ $post->title }}</a></h5>
            <h6>By: {{ $post->author->name }}</h6>
            <h4>{{ $post->excerpt }}</h4>
        </article>
    @endforeach

@else
    <p>Tidak ada postingan yang ditemukan.</p>
@endif


</div>
@endsection

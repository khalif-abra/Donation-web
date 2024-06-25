@extends('layout.content')

@section('content')
<div class="container">
    <h2 class="text-item text-center mt-3 my-4">Category</h2> <!-- Judul untuk halaman web -->

    @foreach ($categories as $category)

    <ul>
        <li>
            <h5><a href="/blog/{{ $category->slug }}">{{ $category->name }}</a></h5>
        </li>
    </ul>
    @endforeach
@endsection
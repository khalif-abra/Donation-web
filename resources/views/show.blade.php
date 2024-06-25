@extends('layout.content')

@section('article_content')

<h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>
<p>Created at: {{ $post->created_at->format('Y-m-d H:i:s') }}</p>

@endsection
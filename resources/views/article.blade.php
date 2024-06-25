@extends('layout.content')

@section('content')
    <div id="news-journey" class="container" style="margin-top: 5rem; margin-bottom: 5rem; text-align: center;">
        <form action="{{ route('articles.search') }}" method="POST" class="mb-3 d-flex">
            @csrf
            <input type="text" name="search" class="form-control mx-3" placeholder="Search articles..." value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary my4">Search</button>
        </form>
        <Hr class="pb-3">
        <div class="section-title" style="margin-bottom: 4rem;">News Journey</div>

        @if (isset($posts) && $posts->count() > 0)
        <div class="card mb-5">
            <img src="img/gambar4.jpg" class="card-img-top" alt="...">
            <div class="card-body ">
                <h5 class="card-title">{{ $posts[0]->title }}</h5>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="{{ route('blog.show', ['post' => $posts[0]]) }}" class="btn btn-primary" style="width: 150px;">Read More</a>
                <p class="card-text"><small class="text-body-secondary">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
            </div>
        </div>




        <div class="row justify-content-center mt-3">
            @php
                $postsByCategory = $posts->groupBy('category.name');
            @endphp
        
            @foreach ($postsByCategory as $categoryName => $categoryPosts)
                <div class="category-container">
                    <a class="section-title-title no-hover my-5">{{ $categoryName }}</a>
        
                    <div class="row">
                        @foreach ($categoryPosts as $post)
                            <div class="col-md-6 col-lg-4 sm-2" style="margin-bottom: 4rem;" data-aos="fade-up">
                                <div class="card mb-3"
                                style="display: inline-block; width: auto; border: 1px solid #ddd; padding: 10px;">
                                <img src="{{ asset('img/gambar3.jpg') }}" class="card-img-top" alt="..." loading="lazy">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{{ $post->excerpt }}</p>
                                    <p style="font-size: 14px;" class="text-secondary">By: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none text-secondary" style="font-size: 14px;">{{ $post->author->name }}</a></p>
                                        <a href="{{ route('blog.show', ['post' => $post]) }}" class="btn btn-primary">Read more..</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        



        @else
        <p class="text-center fs-4">No post found</p>
        <img src="img/animate.gif"></img>
        @endif








    {{-- <div class="position-relative">
        <div id="articleCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @php
                    $chunkedPosts = array_chunk($posts, 3); // Bagi array $posts menjadi kelompok dengan 3 item
                @endphp
                @foreach ($chunkedPosts as $index => $chunk)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <div class="row justify-content-center">
                        @foreach ($chunk as $post)
                        <div class="col-md-4 mb-4">
                            <div class="card mb-4 card-1" style="max-height: 400px;">
                                <div class="card-body">
                                    <h5 class="card-title text-center mt-1">{{ $post["title"] }}</h5>
                                    <img src="img/gambar1.jpg" class="card-img-top" alt="Card Image" style="object-fit: cover; height: 200px; border-radius: 10px;">
                                    <p class="card-text" style="margin-top: 10px; margin-bottom: 10px;">{{ $post['slug'] }}</p>
                                    <div class="text-center mt-3">
                                        <a href="/blog" class="btn btn-dark">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div> --}}
@endsection

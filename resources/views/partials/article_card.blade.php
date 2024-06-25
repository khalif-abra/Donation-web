
    <!-- Carousel -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1719242086474-426087b8e0d3?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100"></img>
                <div class="carousel-caption">
                    <form action="{{ route('articles.search') }}" method="POST" class="mb-3 d-flex">
                        @csrf
                        <input type="text" name="search" class="form-control" placeholder="Search articles..." value="{{ request('search') }}">
                        <button type="submit" class="btn btn-primary mt-2">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
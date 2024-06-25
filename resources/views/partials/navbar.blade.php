    <style>
        .navbar-brand {
            color: #fff;
            transition: color 0.3s;
        }
        .navbar-brand.scrolled {
            color: #333A73;
        }
    </style>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand mx-4" href="/">Donation</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mr-3">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About</a>
                    <a class="nav-link {{ request()->is('article*') ? 'active' : '' }}" href="{{ route('posts.index') }}">Article</a>
                    <a class="nav-link {{ request()->is('gallery') ? 'active' : '' }}" href="/gallery">Gallery</a>
                    <a class="nav-link {{ request()->is('event') ? 'active' : '' }}" href="/event">Event</a>
                    <a class="nav-link {{ request()->is('donation') ? 'active' : '' }}" href="/donation">Donation</a>
                    <a class="nav-link {{ request()->is('shop') ? 'active' : '' }}" href="/shop">Shop</a>
                </div>
                <button type="button" class="btn btn-primary">Login</button>
                <button type="button" class="btn btn-outline-success mx-3">Register</button>
            </div>
        </div>
    </nav>
    
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $movie->title }} - Movie Max Stream</title>
    <link rel="stylesheet" href="{{ asset('assets/Movie_page/css/style.css') }}" />
</head>
<body>
    <nav class="navbar">
        <a href="/librarymovie" class="navbar-logo">Movie<span>Max</span> ID</a>
        <div class="navbar-extra">
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>

    <section id="movie-details" class="movie-details">
        <div class="container">
            <div class="movie-trailer">
                @if($movie->trailer_url)
                <iframe width="560" height="315" src="{{ $movie->trailer_url }}" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                @endif
            </div>
            <div class="movie-info">
                <div class="actions">
                    @if($movie->trailer_url)
                    <a href="{{ $movie->trailer_url }}" target="_blank" class="btn watch-trailer">Watch Trailer</a>
                    @endif
                </div>
                <h2>{{ $movie->title }}</h2>
                <p class="release-date">
                    Release Date: {{ \Carbon\Carbon::parse($movie->release_date)->translatedFormat('F d, Y') }}
                </p>
                <p class="description">{{ $movie->description }}</p>
                <div class="genres">
                    @foreach($movie->genres as $genre)
                        <span class="genre">{{ $genre->name }}</span>
                    @endforeach
                </div>
                <div class="cast" style="margin-top: 24px;">
                    <div class="cast-list" style="display: flex; gap: 5px; flex-wrap: wrap;">
                        @foreach($movie->actors as $actor)
                            <div class="actor" style="text-align: center;">
                                <img src="{{ asset($actor->photo_url) }}" alt="{{ $actor->name }}" style="width:100px; height:100px; object-fit:cover; border-radius:50%; margin-bottom:8px; box-shadow:0 2px 8px rgba(0,0,0,0.15);">
                                <p style="margin:0; font-weight:500;">{{ $actor->name }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="credit">
            <p>Created by <a href="">KELOMPOK 10</a> || &copy; 2024</p>
        </div>
    </footer>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>feather.replace();</script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Movie Max Indonesia - Nonton Movie Live Stream Gratis</title>
    <!-- link to font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,700;1,900&display=swap"
        rel="stylesheet" />
    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- style to css -->
    <link rel="stylesheet" href="assets/Movie_page/css/style.css" />
</head>

<body>
    <!-- Navbar start -->
    <nav class="navbar">
        <!-- Logo -->
        <a href="#home" class="navbar-logo">Movie <span>Max ID</span></a>

        <!-- Menu -->
        <div class="navbar-nav">
            <a href="moviepage" id="homeBtn">Home</a>
            <a href="#popularmovie" id="popularBtn">Popular Movies</a>
            <a href="#upcoming" id="upcomingBtn">Upcoming Movies</a>
        </div>

        <!-- search and auth -->
        <div class="wrapper">
            <!-- search container -->
            <div class="search-container">
                <div class="search-element">
                    <input type="text" class="form-control" placeholder="Search Movie ..." id="movie-search-box"
                        onkeyup="findMovies()" onclick="findMovies()" />
                    <div class="search-list" id="search-list"></div>
                </div>
            </div>

            @if (session('username'))
            <div class="auth-container">
                <a href="/profile">
                    @php
                    // Ambil user dari database berdasarkan session user_id
                    $user = \App\Models\Signup::find(session('user_id'));
                    $profilePhoto =
                    $user && $user->photo ? asset('storage/' . $user->photo) : asset('/img/avatar.png');
                    @endphp
                    <img src="{{ $profilePhoto }}" alt="Profile" class="profile-photo">
                </a>
                <span class="username">Hi, {{ session('username') }}</span>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="logout-btn">Logout</button>
                </form>
            </div>
            @endif
        </div>

        <!-- extra -->
        <div class="navbar-extra">
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- film terbaru section start -->
    <section id="popularmovie" class="popular-movies">
        <h2>Movie<span>Terbaru</span></h2>
        <div class="movies-grid">
            {{-- Movie dari database (harus di atas) --}}
            @foreach($movies as $movie)
            <a href="{{ route('movie.show', $movie->id) }}" class="movie-link">
                <div class="movie">
                    <img src="{{ asset($movie->poster) }}" alt="{{ $movie->title }}" />
                    <h3>{{ $movie->title }}</h3>
                    <p>Rating: {{ $movie->rating_avg }}/10</p>
                    @if (session('user_id'))
                    <button class="bookmark-btn" data-title="{{ $movie->title }}" data-image="{{ asset($movie->poster) }}">
                        <i class="fas fa-bookmark"></i> Bookmark
                    </button>
                    @endif
                </div>
            </a>
            @endforeach

            {{-- Movie manual (yang sudah ada) --}}
            <a href="/wolverine" class="movie-link">
                <div class="movie">
                    <img src="/img/g1.jpg" alt="Movie 1" />
                    <h3>The Wolverine</h3>
                    <p>Rating: 6.7/10</p>
                    @if (session('user_id'))
                    <button class="bookmark-btn" data-title="The Wolverine" data-image="/img/g1.jpg">
                        <i class="fas fa-bookmark"></i> Bookmark
                    </button>
                    @endif
                </div>
            </a>

            <a href="/harry_potter" class="movie-link">
                <div class="movie">
                    <img src="/img/g2.jpg" alt="Movie 2" />
                    <h3>Harry Potter and the Deathly Hallows</h3>
                    <p>Rating: 7.7/10</p>
                    @if (session('user_id'))
                    <button class="bookmark-btn" data-title="Harry Potter and the Deathly Hallows"
                        data-image="/img/g2.jpg">
                        <i class="fas fa-bookmark"></i> Bookmark
                    </button>
                    @endif
                </div>
            </a>

            <a href="/loki" class="movie-link">
                <div class="movie">
                    <img src="/img/g3.jpg" alt="Movie 3" />
                    <h3>Loki</h3>
                    <p>Rating: 8.2/10</p>
                    @if (session('user_id'))
                    <button class="bookmark-btn" data-title="Loki" data-image="/img/g3.jpg">
                        <i class="fas fa-bookmark"></i> Bookmark
                    </button>
                    @endif
                </div>
            </a>

            <a href="/deadpool" class="movie-link">
                <div class="movie">
                    <img src="/img/g4.jpg" alt="Movie 3" />
                    <h3>Deadpool</h3>
                    <p>Rating: 8/10</p>
                    @if (session('user_id'))
                    <button class="bookmark-btn" data-title="Deadpool" data-image="/img/g4.jpg">
                        <i class="fas fa-bookmark"></i> Bookmark
                    </button>
                    @endif
                </div>
            </a>

            <a href="/iron_man" class="movie-link">
                <div class="movie">
                    <img src="/img/g5.jpg" alt="Movie 3" />
                    <h3>Iron-man</h3>
                    <p>Rating: 7.9/10</p>
                    @if (session('user_id'))
                    <button class="bookmark-btn" data-title="Iron-man" data-image="/img/g5.jpg">
                        <i class="fas fa-bookmark"></i> Bookmark
                    </button>
                    @endif
                </div>
            </a>

            <a href="/john_wick" class="movie-link">
                <div class="movie">
                    <img src="/img/g6.jpg" alt="Movie 3" />
                    <h3>John Wick: Chapter 4</h3>
                    <p>Rating: 7.7/10</p>
                    @if (session('user_id'))
                    <button class="bookmark-btn" data-title="John Wick: Chapter 4" data-image="/img/g6.jpg">
                        <i class="fas fa-bookmark"></i> Bookmark
                    </button>
                    @endif
                </div>
            </a>

            <a href="/world_war_z" class="movie-link">
                <div class="movie">
                    <img src="/img/g7.jpg" alt="Movie 3" />
                    <h3>World War Z</h3>
                    <p>Rating: 7/10</p>
                    @if (session('user_id'))
                    <button class="bookmark-btn" data-title="World War Z" data-image="/img/g7.jpg">
                        <i class="fas fa-bookmark"></i> Bookmark
                    </button>
                    @endif
                </div>
            </a>

            <a href="/captain_america" class="movie-link">
                <div class="movie">
                    <img src="/img/g8.jpg" alt="Movie 3" />
                    <h3>Captain America: The First Avenger</h3>
                    <p>Rating: 6.9/10</p>
                    @if (session('user_id'))
                    <button class="bookmark-btn" data-title="Captain America: The First Avenger"
                        data-image="/img/g8.jpg">
                        <i class="fas fa-bookmark"></i> Bookmark
                    </button>
                    @endif
                </div>
            </a>

            <a href="/bumblebee" class="movie-link">
                <div class="movie">
                    <img src="/img/g9.jpg" alt="Bumblebee" />
                    <h3>Bumblebee</h3>
                    <p>Rating: 6.8/10</p>
                    @if (session('user_id'))
                    <button class="bookmark-btn" data-title="Bumblebee" data-image="/img/g9.jpg">
                        <i class="fas fa-bookmark"></i> Bookmark
                    </button>
                    @endif
                </div>
            </a>

            <a href="/doctor_strange" class="movie-link">
                <div class="movie">
                    <img src="/img/g13.jpg" alt="Doctor Strange" />
                    <h3>Doctor Strange</h3>
                    <p>Rating: 7.5/10</p>
                    @if (session('user_id'))
                    <button class="bookmark-btn" data-title="Doctor Strange" data-image="/img/g13.jpg">
                        <i class="fas fa-bookmark"></i> Bookmark
                    </button>
                    @endif
                </div>
            </a>

            <a href="/spiderman" class="movie-link">
                <div class="movie">
                    <img src="/img/g14.jpg" alt="Spiderman: No Way Home" />
                    <h3>Spiderman: No Way Home</h3>
                    <p>Rating: 8.5/10</p>
                    @if (session('user_id'))
                    <button class="bookmark-btn" data-title="Spiderman: No Way Home" data-image="/img/g14.jpg">
                        <i class="fas fa-bookmark"></i> Bookmark
                    </button>
                    @endif
                </div>
            </a>

            <a href="/deadpoolxwolverine" class="movie-link">
                <div class="movie">
                    <img src="/img/deadpolxwolfren.jpg" alt="Movie 3" />
                    <h3>Deadpool X Wolverine</h3>
                    <p>Rating: 8/10</p>
                    @if (session('user_id'))
                    <button class="bookmark-btn" data-title="Deadpool X Wolverine"
                        data-image="/img/deadpolxwolfren.jpg">
                        <i class="fas fa-bookmark"></i> Bookmark
                    </button>
                    @endif
                </div>
            </a>
        </div>
    </section>
    <!-- popular section end -->

    <!-- Upcoming Movies start -->
    <section id="upcoming" class="upcoming-movies">
        <h2>Upcoming <span>Movie</span></h2>
        <div class="movies-grid">
            <div class="movie">
                <a href="https://www.imdb.com/title/tt28650488/?ref_=ext_shr_lnk" target="_blank"><img src="/img/g10.png"
                        alt="Upcoming Movie 1" /></a>
                <h3>The Super Mario Galaxy Movie</h3>
                <p>Release Date: April 3, 2026</p>
                <div class="countdown" data-release-date="2026-04-03"></div>
            </div>
            <div class="movie">
                <a href="https://www.imdb.com/title/tt29355505/?ref_=ext_shr_lnk" target="_blank"><img src="/img/g11.png"
                        alt="Upcoming Movie 2" /></a>
                <h3>Toy Story 5</h3>
                <p>Release Date: June 19, 2026</p>
                <div class="countdown" data-release-date="2026-06-19"></div>
            </div>
            <div class="movie">
                <a href="https://www.imdb.com/title/tt22084616/?ref_=ext_shr_lnk" target="_blank"><img src="/img/g12.png"
                        alt="Upcoming Movie 3" /></a>
                <h3>Spider-Man: Brand New Day</h3>
                <p>Release Date: July 31, 2026</p>
                <div class="countdown" data-release-date="2026-07-31"></div>
            </div>
        </div>
    </section>
    <!-- Upcoming Movies end -->


    <!-- result container -->
    <div class="container">
        <div class="result-container">
            <div class="result-grid" id="result-grid"></div>
        </div>
    </div>
    <!-- result container end-->
    </div>
    <!-- search end -->

    <section id="contact" class="contact">
        <h2>Kontak<span> Kami</span></h2>
        <p>
            kamu bisa kontak kami Jika ada permasalahan ketika login atau menonton film melalui grup Telegram!
        </p>


    </section>



    <!-- Footer start-->
    <footer>
        <div class="socials">
            <a href="https://t.me/MovieMaxID"><i data-feather="twitter"></i></a>
        </div>

        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">Tentang kami</a>
        </div>

        <div class="credit">
            <p>Movie <a href="">Max</a> Indonesia | &copy; 2024.</p>
        </div>
    </footer>
    <!-- Footer end-->

    <!-- feather incos -->
    <script>
        feather.replace();
    </script>
    <!-- link to jss -->
    <script src="assets/Movie_page/js/script.js"></script>
</body>

</html>
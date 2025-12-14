<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Review - Movie Max Indonesia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="/assets/Movie_page/css/style.css" />
    <style>
        body {
            background: url('/img/Netflix-Background.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
        }
        .review-container {
            max-width: 1400px;
            margin: 40px auto;
            padding: 0 32px;
        }
        .review-card {
            background: rgba(34,34,34,0.35);
            color: #fff;
            border-radius: 16px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.2);
            padding: 32px 24px;
            margin-bottom: 32px;
            backdrop-filter: blur(10px);
            border: none;
        }
        @media (max-width: 900px) {
            .review-container {
                max-width: 100vw;
                padding: 0 8px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar start -->
    <nav class="navbar">
        <a href="/moviepage" class="navbar-logo">Movie <span>Max ID</span></a>
        <div class="navbar-nav">
            <a href="/moviepage" id="homeBtn">Home</a>
            <a href="#popularmovie" id="popularBtn">Popular Movies</a>
            <a href="#upcoming" id="upcomingBtn">Upcoming Movies</a>
            <a href="/review-feed" id="reviewFeedBtn">Review Feed</a>
        </div>
        <div class="wrapper">
            <div class="search-container">
                <div class="search-element">
                    <input type="text" class="form-control" placeholder="Search Movie ..." id="movie-search-box" onkeyup="findMovies()" onclick="findMovies()" />
                    <div class="search-list" id="search-list"></div>
                </div>
            </div>
            @if (session('username'))
            <div class="auth-container">
                <a href="/profile">
                    @php
                    $user = \App\Models\Signup::find(session('user_id'));
                    $profilePhoto = $user && $user->photo ? asset('storage/' . $user->photo) : asset('/img/avatar.png');
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
        <div class="navbar-extra">
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- navbar end -->
    <div class="review-container">
        <div class="review-card">
            <h2 style="font-size: 2rem; font-weight: bold; margin-bottom: 24px;">Edit Review</h2>
            <form action="{{ route('review_feed.update', $feed->id) }}" method="POST" style="margin-bottom: 32px;">
                @csrf
                @method('PUT')
                <div style="margin-bottom: 18px;">
                    <div style="position: relative;">
                        <textarea name="caption" required
                            style="width: 100%; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08); padding: 14px 16px 44px; background: rgba(20,20,20,0.7); color: #fff; box-shadow: inset 0 1px 0 rgba(255,255,255,0.04); backdrop-filter: blur(6px);">{{ $feed->caption }}</textarea>
                    </div>
                </div>
                <div style="display:grid; grid-template-columns: 1fr 180px; gap: 14px; align-items:end;">
                    <div>
                        <label for="movie_id" style="font-weight: 600; margin-bottom: 8px; display: block;">Select Movie</label>
                        <div style="position:relative;">
                            <select name="movie_id" required
                                style="width: 100%; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08); padding: 12px 14px; background: rgba(20,20,20,0.7); color: #fff; backdrop-filter: blur(6px); appearance:none;">
                                @foreach($movies as $movie)
                                    <option value="{{ $movie->id }}" @if($feed->movie_id == $movie->id) selected @endif>{{ $movie->title }}</option>
                                @endforeach
                            </select>
                            <span style="position:absolute; right:12px; top:50%; transform:translateY(-50%); color:#aaa;">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </div>
                    </div>
                    <div>
                        <label for="rating" style="font-weight: 600; margin-bottom: 8px; display: block;">Rating (0-10)</label>
                        <input type="number" name="rating" min="0" max="10" step="0.1" required value="{{ $feed->rating }}"
                            style="width: 100%; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08); padding: 12px 14px; background: rgba(20,20,20,0.7); color: #fff; backdrop-filter: blur(6px);">
                    </div>
                </div>
                <div style="margin-top: 18px; display:flex; gap:10px;">
                    <button type="submit" style="background: linear-gradient(135deg, #fb7185 0%, #f43f5e 100%); color: #fff; padding: 12px 28px; border-radius: 12px; font-weight: 700; border: none; box-shadow: 0 8px 16px rgba(244,63,94,0.28);">Update</button>
                    <a href="{{ route('review_feed.index') }}" style="background: rgba(255,255,255,0.12); color:#fff; padding: 12px 18px; border-radius: 12px; text-decoration:none; font-weight:600;">Kembali</a>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger mt-2" style="background: #e74c3c; color: #fff; border-radius: 8px; margin-top: 12px; padding: 10px;">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success mt-2" style="background: #27ae60; color: #fff; border-radius: 8px; margin-top: 12px; padding: 10px;">{{ session('success') }}</div>
                @endif
            </form>
        </div>
    </div>
    <script>
        feather.replace();
    </script>
    <script src="/assets/Movie_page/js/script.js"></script>
</body>
</html>

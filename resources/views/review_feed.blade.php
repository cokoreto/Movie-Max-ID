<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Movie Max Indonesia - Review Feed</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="assets/Movie_page/css/style.css" />
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
        .review-feed-list {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }
        .feed-card {
            background: rgba(34,34,34,0.45);
            color: #fff;
            border-radius: 16px;
            box-shadow: 0 1px 8px rgba(0,0,0,0.1);
            padding: 24px 18px;
            backdrop-filter: blur(6px);
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
            <h2 style="font-size: 2rem; font-weight: bold; margin-bottom: 24px;">Review Feed</h2>
            <form action="{{ route('review_feed.store') }}" method="POST" style="margin-bottom: 32px;">
                @csrf
                <div style="margin-bottom: 18px;">
                    <div style="position: relative;">
                        <textarea name="caption" placeholder="What's happening?" required
                            style="width: 100%; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08); padding: 14px 16px 44px; background: rgba(20,20,20,0.7); color: #fff; box-shadow: inset 0 1px 0 rgba(255,255,255,0.04); backdrop-filter: blur(6px);"></textarea>
                    </div>
                </div>
                <div style="display:grid; grid-template-columns: 1fr 180px; gap: 14px; align-items:end;">
                    <div>
                        <label for="movie_id" style="font-weight: 600; margin-bottom: 8px; display: block;">Select Movie</label>
                        <div style="position:relative;">
                            <select name="movie_id" required
                                style="width: 100%; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08); padding: 12px 14px; background: rgba(20,20,20,0.7); color: #fff; backdrop-filter: blur(6px); appearance:none;">
                                <option value="">Choose Movie</option>
                                @foreach($movies as $movie)
                                    <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                                @endforeach
                            </select>
                            <span style="position:absolute; right:12px; top:50%; transform:translateY(-50%); color:#aaa;">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </div>
                    </div>
                    <div>
                        <label for="rating" style="font-weight: 600; margin-bottom: 8px; display: block;">Rating (0-10)</label>
                        <input type="number" name="rating" min="0" max="10" step="0.1" required
                            style="width: 100%; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08); padding: 12px 14px; background: rgba(20,20,20,0.7); color: #fff; backdrop-filter: blur(6px);">
                    </div>
                </div>
                <div style="margin-top: 18px; display:flex; gap:10px;">
                    <button type="submit" style="background: linear-gradient(135deg, #fb7185 0%, #f43f5e 100%); color: #fff; padding: 12px 28px; border-radius: 12px; font-weight: 700; border: none; box-shadow: 0 8px 16px rgba(244,63,94,0.28);">Post</button>
                    <a href="{{ route('review_feed.index') }}" style="background: rgba(255,255,255,0.12); color:#fff; padding: 12px 18px; border-radius: 12px; text-decoration:none; font-weight:600;">Reset</a>
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
            <div class="review-feed-list">
                @foreach($feeds as $feed)
                    @php
                        $profilePhoto = ($feed->user && isset($feed->user->photo) && $feed->user->photo) ? asset('storage/' . $feed->user->photo) : asset('/img/avatar.png');
                        $username = $feed->user && isset($feed->user->username) ? $feed->user->username : 'User';
                        $isOwner = session('user_id') == $feed->signup_id;
                    @endphp
                    <div class="feed-card" style="display: flex; flex-direction: row; align-items: stretch; justify-content: space-between; background: rgba(34,34,34,0.25); border: none; backdrop-filter: blur(6px);">
                        <div style="flex:1; min-width:0;">
                            <div style="display: flex; align-items: center; margin-bottom: 12px;">
                                <img src="{{ $profilePhoto }}" alt="Profile" style="width: 44px; height: 44px; object-fit: cover; border-radius: 50%; margin-right: 14px; border: 2px solid #fb7185;">
                                <div>
                                    <span style="font-weight: bold; font-size: 1.1em;">{{ $username }}</span>
                                    <span style="margin-left: 8px; color: #aaa; font-size: 0.95em;">{{ $feed->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                            <div style="display: flex; align-items: center; margin-bottom: 10px;">
                                <!-- Stars on the left, poster and title on the right -->
                                <div style="display: flex; flex-direction: row; align-items: center; width: 100%;">
                                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); grid-template-rows: repeat(5, 1fr); gap: 2px; margin-right: 18px;">
                                        @php
                                            $rating = $feed->rating;
                                            $fullStars = floor($rating);
                                            $halfStar = ($rating - $fullStars) >= 0.5 ? 1 : 0;
                                            $emptyStars = 10 - $fullStars - $halfStar;
                                            $stars = [];
                                            for ($i = 0; $i < $fullStars; $i++) $stars[] = 'full';
                                            if ($halfStar) $stars[] = 'half';
                                            for ($i = 0; $i < $emptyStars; $i++) $stars[] = 'empty';
                                        @endphp
                                        @foreach ($stars as $star)
                                            @if ($star === 'full')
                                                <i class="fas fa-star" style="color: #f1c40f; font-size: 1.3em;"></i>
                                            @elseif ($star === 'half')
                                                <i class="fas fa-star-half-alt" style="color: #f1c40f; font-size: 1.3em;"></i>
                                            @else
                                                <i class="far fa-star" style="color: #f1c40f; font-size: 1.3em;"></i>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div style="display: flex; flex-direction: column; align-items: center;">
                                        <a href="/movie/{{ $feed->movie->id }}" style="text-decoration:none; color:inherit;">
                                            <img src="{{ $feed->movie->poster ?? '' }}" alt="{{ $feed->movie->title }}" style="width: 120px; height: 170px; object-fit: cover; border-radius: 12px; margin-bottom: 10px; box-shadow: 0 2px 12px rgba(0,0,0,0.18);">
                                        </a>
                                        <a href="/movie/{{ $feed->movie->id }}" style="text-decoration:none; color:inherit;">
                                            <span style="font-weight: 600; font-size: 1.08em; text-align:center; color:#fff;">{{ $feed->movie->title }}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-bottom: 10px; font-size: 1.08em; line-height: 1.5;">
                                {!! preg_replace('/@([A-Za-z0-9_\.]+)/', '<span style="color:#2d8cf0;font-weight:bold;">@$1</span>', e($feed->caption)) !!}
                            </div>
                            <div style="display: flex; gap: 12px; margin-top: 10px;">
                                @if($isOwner)
                                    <a href="{{ route('review_feed.edit', $feed->id) }}" style="background: #f1c40f; color: #222; padding: 8px 28px; border-radius: 10px; font-weight: bold; text-decoration: none; font-size: 1em; border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.08); transition: background 0.2s;">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('review_feed.destroy', $feed->id) }}" method="POST" onsubmit="return confirm('Yakin hapus postingan?')" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="background: #e74c3c; color: #fff; padding: 10px 32px; border-radius: 10px; font-size: 1.2em; border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.08); transition: background 0.2s;">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                @endif
                                <button onclick="document.getElementById('reply-form-{{ $feed->id }}').style.display='block'" style="background: #2d8cf0; color: #fff; padding: 8px 28px; border-radius: 10px; font-size: 1.2em; border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.08); transition: background 0.2s;">
                                    <i class="fas fa-reply"></i>
                                </button>
                            </div>
                            <!-- Reply form -->
                            <div id="reply-form-{{ $feed->id }}" style="display:none; margin-top:16px;">
                                <form action="{{ route('review_feed.reply.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="review_feed_id" value="{{ $feed->id }}">
                                    <input type="hidden" name="parent_reply_id" value="">
                                    <textarea name="text" style="width:100%; border-radius:8px; border:1px solid #333; padding:10px; background:#222; color:#fff; margin-bottom:8px;" placeholder="Reply..." required></textarea>
                                    <button type="submit" style="background:#2d8cf0; color:#fff; padding:7px 22px; border-radius:8px; font-weight:bold; border:none;">Kirim</button>
                                    <button type="button" onclick="document.getElementById('reply-form-{{ $feed->id }}').style.display='none'" style="background:#333; color:#fff; padding:7px 22px; border-radius:8px; font-weight:bold; border:none; margin-left:8px;">Batal</button>
                                </form>
                            </div>
                            <!-- List replies -->
                            @if($feed->replies->count())
                                <div style="margin-top:18px;">
                                    @foreach($feed->replies as $reply)
                                        @include('review_feed_reply', ['reply' => $reply, 'level' => 0])
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <!-- Removed duplicate poster and title container -->
                    </div>
                @endforeach
                <div class="mt-6">{{ $feeds->links() }}</div>
            </div>
        </div>
    </div>
    <script>
        feather.replace();
    </script>
    <script src="assets/Movie_page/js/script.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Movie Max Stream</title>
    <!-- link to font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&display=swap" rel="stylesheet" />
    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- style to css -->
    <link rel="stylesheet" href="assets/Movie_page/css/style.css" />
</head>

<body>
    <!-- Navbar start -->
    <nav class="navbar">
        <!-- Logo -->
        <a href="/moviepage" class="navbar-logo">Movie<span>Max</span> ID</a>

        {{-- <!-- Menu -->
        <div class="navbar-nav">
            <a href="/moviepage">Home</a>
        </div> --}}

        <!-- extra -->
        <div class="navbar-extra">
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- deskripsi selection start -->
    <section id="movie-details" class="movie-details">
        <div class="container">
            <div class="movie-trailer">
                <iframe
                    width="560"
                    height="315"
                    src="https://drive.google.com/file/d/1v4or0j7jJPKBtvS9ekb1qXoRkCphXntO/preview"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen></iframe>
            </div>
            <div class="movie-info">
                <div class="actions">
                    <a href="https://www.youtube.com/embed/JfVOs4VSpmA" target="_blank" class="btn watch-trailer">Watch Trailer</a>
                    <a href="https://drive.usercontent.google.com/download?id=1v4or0j7jJPKBtvS9ekb1qXoRkCphXntO&export=download&authuser=0" target="_blank" class="btn watch-trailer">Download 1080p</a>
                </div>
                <h2>Spiderman: No Way Home</h2>
                <p class="release-date">Release Date: December 17, 2021</p>
                <p class="description">
                    Untuk pertama kalinya dalam sejarah sinematik Spider-Man, identitas pahlawan kita yang ramah di lingkungan terungkap, menempatkan tanggung jawab superhero-nya berbenturan dengan kehidupan normalnya dan menempatkan mereka yang
                    paling dia cintai dalam bahaya. Ketika dia meminta bantuan Doctor Strange untuk memulihkan rahasia, mantra itu merobek lubang di dunia mereka, melepaskan penjahat paling kuat yang pernah melawan Spider-Man di alam semesta mana
                    pun. Sekarang, Peter harus mengatasi tantangan terbesarnya, yang tidak hanya akan selamanya mengubah masa depannya sendiri tetapi masa depan Multiverse.
                </p>
                <div class="genres">
                    <span class="genre">Action</span>
                    <span class="genre">Adventure</span>
                    <span class="genre">Fantasy</span>
                </div>
                <div class="cast">
                    <div class="actor">
                        <img src="/img/actor/tomholand.png" alt="Tom Holland" />
                        <p>Tom Holland</p>
                    </div>
                    <div class="actor">
                        <img src="/img/actor/Zendaya.png" alt="Zendaya" />
                        <p>Zendaya</p>
                    </div>
                    <div class="actor">
                        <img src="/img/actor2/Benedict Cumberbatch.jpg" alt="Benedict Cumberbatch" />
                        <p>Benedict</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- deskripsi selection end -->

    <!-- footer start -->
    <footer>
        <div class="credit">
            <p>Created by <a href="">KELOMPOK 3</a> || &copy; 2024</p>
        </div>
    </footer>
    <!-- footer end -->

    <!-- feather icons -->
    <script>
        feather.replace();
    </script>
    <!-- link to js -->
    <script src="assets/js/script.js"></script>
</body>

</html>
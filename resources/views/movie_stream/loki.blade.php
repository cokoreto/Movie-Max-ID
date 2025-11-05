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
        <a href="/Movie page/index.html">Home</a>
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
            src="https://www.youtube.com/embed/G4JuopziR3Q"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
          ></iframe>
        </div>
        <div class="movie-info">
          <div class="actions">
            <a href="https://www.youtube.com/embed/G4JuopziR3Q" target="_blank" class="btn watch-trailer">Watch Trailer</a>
            <a href="#" target="_blank" class="btn watch-trailer">Download 1080p</a>
          </div>
          <h2>Loki</h2>
          <p class="release-date">Release Date: June 9, 2021</p>
          <p class="description">
            Loki, Dewa Kenakalan, keluar dari bayang-bayang saudaranya memulai petualangan yang terjadi setelah peristiwa "Avengers: Permainan Akhir." Serial ini mengikuti Loki saat dia ditangkap oleh Time Variance Authority (TVA) dan
            diberi pilihan: penghapusan wajah dari kenyataan atau membantu memperbaiki garis waktu dan menghentikan ancaman yang lebih besar.
          </p>
          <div class="genres">
            <span class="genre">Action</span>
            <span class="genre">Fantasy</span>
            <span class="genre">Sci-Fi</span>
          </div>
          <div class="cast">
            <div class="actor">
              <img src="/img\actor\Tom Hiddleston.jpg" alt="Tom Hiddleston" />
              <p>Tom Hiddleston</p>
            </div>
            <div class="actor">
              <img src="/img\actor\Owen Wilson.jpg" alt="Owen Wilson" />
              <p>Owen Wilson</p>
            </div>
            <div class="actor">
              <img src="/img\actor\Sophia Di Martino.jpg" alt="Sophia Di Martino" />
              <p>Sophia Di Martino</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- deskripsi selection end -->

    <!-- footer start -->
    <footer>
      <div class="credit">
        <p>Created by <a href="">KELOMPOK 10</a> || &copy; 2024</p>
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

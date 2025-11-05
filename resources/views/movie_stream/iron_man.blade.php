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
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&display=swap"
      rel="stylesheet"
    />
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
            src="https://www.youtube.com/embed/8ugaeA-nMTc"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
          ></iframe>
        </div>
        <div class="movie-info">
          <div class="actions">
            <a href="https://www.youtube.com/embed/8ugaeA-nMTc" target="_blank" class="btn watch-trailer">Watch Trailer</a>
            <a href="#" target="_blank" class="btn watch-trailer">Download 1080p</a>
          </div>
          <h2>Iron Man</h2>
          <p class="release-date">Release Date: May 2, 2008</p>
          <p class="description">
            "Iron Man" mengisahkan tentang Tony Stark, seorang miliarder jenius yang memperoleh kemampuan super setelah membuat baju besi tingkat tinggi. Dia menggunakan teknologi tersebut untuk melawan kejahatan sebagai pahlawan super Iron
            Man. Film ini menampilkan aksi yang spektakuler dan memperkenalkan karakter ikonik ke dalam Marvel Cinematic Universe (MCU).
          </p>
          <div class="genres">
            <span class="genre">Action</span>
            <span class="genre">Adventure</span>
            <span class="genre">Sci-Fi</span>
          </div>
          <div class="cast">
            <div class="actor">
              <img src="/img\actor\Robert Downey Jr.jpg" alt="Robert Downey Jr." />
              <p>Robert Downey Jr.</p>
            </div>
            <div class="actor">
              <img src="/img\actor\Gwyneth Paltrow.jpg" alt="Gwyneth Paltrow" />
              <p>Gwyneth Paltrow</p>
            </div>
            <div class="actor">
              <img src="/img\actor\Jeff Bridges.jpg" alt="Jeff Bridges" />
              <p>Jeff Bridges</p>
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

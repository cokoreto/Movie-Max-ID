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
            src="https://www.youtube.com/embed/MxqsmsA8y5k?si=s-I12qESvZagKiTX"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
          ></iframe>
        </div>
        <div class="movie-info">
          <div class="actions">
            <a href="https://youtu.be/MxqsmsA8y5k?si=p2Ky9qF5RpkYQzL3" target="_blank" class="btn watch-trailer">Watch Trailer</a>
            <a href="#" target="_blank" class="btn watch-trailer">Download 1080p</a>
          </div>
          <h2>Harry Potter and the Deathly Hallows</h2>
          <p class="release-date">Release Date: November 19, 2010</p>
          <p class="description">
            Harry Potter and the Deathly Hallows adalah film drama fantasi yang diadaptasi dari novel yang berjudul sama karya J. K. Rowling. Film ini adalah film ketujuh dan terakhir dari seri film populer Harry Potter. Film ini dirilis
            pada tahun 2010 sabagai bagian 1, sedangkan bagian 2, Harry Potter and the Deathly Hallows Bagian 2 dirilis pada 2011. Shooting film ini dimulai pada Februari 2009. Film menceritakan Harry Potter yang sedang berusaha mencari
            cara menghancurkan imortalitas Lord Voldemort, yaitu Horcrux. Sequel film ini adalah Half-Blood Prince dan diikuti dengan The Deathly Hallows Part 2. Film ini dirilis dalam format 3D dan 2D serta layar IMAX.
          </p>
          <div class="genres">
            <span class="genre">Adventure</span>
            <span class="genre">Fantasy</span>
            <span class="genre">Drama</span>
          </div>
          <div class="cast">
            <div class="actor">
              <img src="/img\actor\Daniel Radcliffe.jpg" alt="Daniel Radcliffe" />
              <p>Daniel Radcliffe</p>
            </div>
            <div class="actor">
              <img src="/img\actor\Emma Watson.jpg" alt="Emma Watson" />
              <p>Emma Watson</p>
            </div>
            <div class="actor">
              <img src="/img\actor\Rupert Grint.jpg" alt="Rupert Grint" />
              <p>Rupert Grint</p>
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

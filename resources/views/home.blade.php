<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Movie Max Indonesia</title>

    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
        rel="stylesheet" />

    <!--feather icon-->
    <script src="https://unpkg.com/feather-icons"></script>
    <!--My style-->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!-- Navbar start-->
    <nav class="navbar">
        <a href="#" class="navbar-logo">Movie<span>Max</span> ID</a>

        <div class="navbar-nav">

            <a href="#contact">Butuh Bantuan?</a>
        </div>

        <div class="navbar-extra">

            <a href="/login" id="sign">Login ></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>

    </nav>
    <!-- Navbar end-->

    <!-- Hero Section start-->
    <section class="hero" id="home">
        <main class="content">
            <h1>Film, Movie populer, dan movie terbaru.</h1>
            <h2 class="h2-info">Tonton di mana saja. Berhenti kapan saja.</h2>
            <p> Mau nonton film tapi belum punya akun? silakan Daftarkan Akunnya Terlebih dahulu.</p>
            <a href="/signup" class="cta">Daftar ></a>
        </main>
    </section>
    <!-- Hero Section end-->

    <!-- About section start-->
    <section id="about" class="about">
        <h2><span>Tentang</span> Kami</h2>

        <div class="row">
            <div class="about-img">
                <img src="/img/logo.png" alt="Tentang kami" />
            </div>
            <div class="content">
                <h3>Mengapa memilih Movie Max ID?</h3>
                <p>
                    Movie Max Indonesia adalah layanan streaming Film Movie Gratis dari Indonesia.
                    Kami menyediakan berbagai film Movie terbaik,
                    termasuk produksi asli dan konten dari pihak ketiga,
                    yang mencakup berbagai genre dan tersedia dalam bahasa indonesia.
                </p>
                <p>
                    Website Kami di buat untuk membantu orang orang yang ingin menonton Film Movie secara gratis , masyarakat indonesia yang berada jauh dari Cinema XXI
                    bisa merasakan sensasi menonton film movie seperti di bioskop
                </p>
            </div>
        </div>
    </section>

    <section id="about" class="about">

        <div class="row-two">
            <div class="about-img">
                <img src="/img/nonton.jpg" style="width: 60%;" alt="Tentang kami" />
            </div>
            <div class="content">

                <h3>Nonton Di mana pun</h3>
                <p>
                    Kamu bisa menonton film dimanapun kapanpun sesuai yang kamu inginkan bahkan di kelas pun bisa ,namun menonton film di kelas tidak di sarankan ketika jam pelajaran.
                </p>

            </div>
        </div>
    </section>


    <!-- About section end-->


    <!-- Prdoucts Section start -->
    <section class="products" id="products">
        <h2><span>Movie </span>Populer</h2>
        <p>Berikut adalah Movie Populer yang bisa kamu tonton secara gratis di website kami</p>

    </section>
    <!-- Prdoucts Section end -->
    <div class="photo-grid">
        <div class="photo"><img src="/img/g6.jpg" alt="Photo 1"></div>
        <div class="photo"><img src="/img/g5.jpg" alt="Photo 2"></div>
        <div class="photo"><img src="/img/g14.jpg" alt="Photo 3"></div>
        <div class="photo"><img src="/img/g10.jpg" alt="Photo 4"></div>

        <div class="photo"><img src="/img/g13.jpg" alt="Photo 6"></div>
    </div>

    <!-- Contact section start-->
    <section id="contact" class="contact">
        <h2>Kontak<span> Kami</span></h2>
        <p>
            kamu bisa kontak kami Jika ada permasalahan ketika login atau menonton film melalui grup Telegram!
        </p>


    </section>
    <!-- Contact section end-->

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

    <!--Feather icons-->
    <script>
        feather.replace();
    </script>

    <!--MY Java script-->
    <script src="js/script.js"></script>
</body>

</html>
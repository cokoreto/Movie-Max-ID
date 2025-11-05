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
            <a href="#home" id="homeBtn">Home</a>
            <a href="#popularmovie" id="popularBtn">Popular Movies</a>
            <a href="#upcoming" id="upcomingBtn">Upcoming Movies</a>
        </div>

        <!-- search and auth -->
        <div class="wrapper">
            <!-- search container -->
            <div class="search-container">
                <div class="search-element">
                    <input type="text" class="form-control" placeholder="Search Movie ..." id="movie-search-box" onkeyup="findMovies()" onclick="findMovies()" />
                    <div class="search-list" id="search-list"></div>
                </div>
            </div>

            @if(session('username'))
            <div class="auth-container">
                <a href="/profile">
                    @php
                    // Ambil user dari database berdasarkan session user_id
                    $user = \App\Models\Signup::find(session('user_id'));
                    $profilePhoto = ($user && $user->photo) ? asset('storage/' . $user->photo) : asset('/img/avatar.png');
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

    <!-- Hero Section start -->
    <div class="carousel next" id="home">
        <!-- list item -->
        <div class="list">
            <!-- LOKI -->
            <div class="item">
                <img src="/img/gambar-1.jpg" />
                <div class="content">
                    <div class="author">2021</div>
                    <div class="title">Loki</div>
                    <div class="topic">Action, Drama, Fantasy</div>
                    <div class="author">
                        Serial TV yang mengikuti petualangan karakter Loki dari Marvel Cinematic Universe setelah peristiwa dalam film "Avengers: Endgame", mengeksplorasi tema perjalanan waktu, realitas alternatif, dan identitas.
                    </div>
                    <div class="buttons">
                        <a class="popup-btn" id="seeMoreBtn">SEE MORE</a>
                        <button id="ratingBtn">
                            RATING
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </button>
                    </div>
                </div>
            </div>

            <!-- The Joker -->
            <div class="item">
                <img src="/img/gambar-2.jpg" />
                <div class="content">
                    <div class="author">2019</div>
                    <div class="title">The Joker</div>
                    <div class="topic">Psychology, Drama</div>
                    <div class="author">Film yang menggambarkan asal-usul karakter Joker dari DC Comics, fokus pada perjalanan psikologis Arthur Fleck, seorang komedian gagal yang akhirnya menjadi tokoh kriminal yang terkenal.</div>
                    <div class="buttons">
                        <a class="popup-btn" id="seeMoreBtn">SEE MORE</a>
                        <button id="ratingBtn">
                            RATING
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i data-feather="x" class="close-btn"></i></a>
                        <div class="movie-img">
                            <img src="/img/gambar-1.jpg" alt="" />
                        </div>
                        <div class="info">
                            <h2>Loki<br /><span>2021</span></h2>
                            <p>
                                Dalam serial ini, kita mengikuti petualangan Loki, dewa tipu muslihat dari mitologi Norse dan karakter yang telah kita kenal dari Marvel Cinematic Universe (MCU), setelah peristiwa yang terjadi dalam "Avengers: Endgame".
                                Loki dihadapkan pada Organisasi Variasi Waktu (TVA), yang mengawasi perjalanan waktu di MCU, dan dia terlibat dalam upaya untuk memperbaiki kerusakan yang dia sebabkan dalam aliran waktu, sambil menjelajahi konsep realitas
                                alternatif dan pertanyaan tentang identitasnya sendiri.
                            </p>
                            <a href="https://youtu.be/nW948Va-l10?si=3VRbCK919eTFNE9F" class="trailer-btn" id="trailerBtn">WATCH TRAILER</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- John Wick 3 -->
            <div class="item">
                <img src="/img/gambar-3.jpg" />
                <div class="content">
                    <div class="author">2019</div>
                    <div class="title">John Wick 3</div>
                    <div class="topic">Action, Thriller</div>
                    <div class="author">Film aksi yang melanjutkan kisah John Wick, seorang pembunuh bayaran yang harus bertahan hidup setelah menjadi target oleh organisasi kriminal internasional.</div>
                    <div class="buttons">
                        <a class="popup-btn" id="seeMoreBtn">SEE MORE</a>
                        <button id="ratingBtn">
                            RATING
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i data-feather="x" class="close-btn"></i></a>
                        <div class="movie-img">
                            <img src="/img/gambar-2.jpg" alt="" />
                        </div>
                        <div class="info">
                            <h2>The Joker<br /><span>2019</span></h2>
                            <p>
                                Film ini memperlihatkan asal-usul ikonik dari karakter Joker dari DC Comics. Arthur Fleck adalah seorang pria yang hidupnya terasa hampa dan putus asa di Kota Gotham yang korup. Dia bermimpi menjadi komedian yang sukses,
                                tetapi ketidakberuntungan terus menimpanya, mendorongnya ke tepi kegilaan. Dalam perjalanan psikologis yang gelap, Arthur berubah menjadi Joker, tokoh kriminal yang terkenal dengan kekacauan dan kebrutalannya.
                            </p>
                            <a href="https://youtu.be/t433PEQGErc?si=Qyw4dBQr-imtZp2y" target="_blank" class="trailer-btn" id="trailerBtn">WATCH TRAILER</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Spiderman No Way Home -->
            <div class="item">
                <img src="/img/gambar-4.jpg" />
                <div class="content">
                    <div class="author">2021</div>
                    <div class="title">Spiderman</div>
                    <div class="topic">Superhero, Action, Fantasy</div>
                    <div class="author">Film superhero yang melanjutkan kisah Spider-Man dalam Marvel Cinematic Universe (MCU), dengan elemen multiverse yang membawa kembali karakter-karakter dari film-film Spider-Man sebelumnya.</div>
                    <div class="buttons">
                        <a class="popup-btn" id="seeMoreBtn">SEE MORE</a>
                        <button id="ratingBtn">
                            RATING
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i data-feather="x" class="close-btn"></i></a>
                        <div class="movie-img">
                            <img src="/img/gambar-3.jpg" alt="" />
                        </div>
                        <div class="info">
                            <h2>John Wick 3<br /><span>2019</span></h2>
                            <p>
                                Film ini melanjutkan kisah John Wick, seorang mantan pembunuh bayaran legendaris yang berjuang untuk bertahan hidup setelah menjadi target oleh organisasi kriminal internasional. Setelah membunuh anggota High Table di
                                Continental Hotel, John dikejar oleh pembunuh bayaran dari seluruh dunia, dan dia harus mencari jalan keluar dengan segala cara yang dia miliki. Petualangannya penuh dengan aksi yang intens, dan dia harus menggunakan
                                keahlian tempurnya untuk melawan musuh-musuhnya.
                            </p>
                            <a href="https://youtu.be/M7XM597XO94?si=OLMBmLnMVsUdcYXK" target="_blank" class="trailer-btn" id="trailerBtn">WATCH TRAILER</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Godzilla -->
            <div class="item">
                <img src="/img/gambar-5.jpg" />
                <div class="content">
                    <div class="author">2019</div>
                    <div class="title">Godzilla</div>
                    <div class="topic">Action, Fantasy</div>
                    <div class="author">
                        Film yang menampilkan pertempuran epik antara Godzilla dan monster-monster besar lainnya, dengan latar belakang upaya manusia untuk bertahan di tengah kekacauan yang ditimbulkan oleh para titan tersebut.
                    </div>
                    <div class="buttons">
                        <a class="popup-btn" id="seeMoreBtn">SEE MORE</a>
                        <button id="ratingBtn">
                            RATING
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i data-feather="x" class="close-btn"></i></a>
                        <div class="movie-img">
                            <img src="/img/gambar-4.jpg" alt="" />
                        </div>
                        <div class="info">
                            <h2>Spider-man : No Way Home<br /><span>2021</span></h2>
                            <p>
                                Mengikuti kisah Spider-Man dalam MCU,film ini menampilkan Peter Parker yang berusaha memperbaiki kekacauan yang disebabkan oleh identitas rahasianya yang terbongkar dan menyelamatkan orang-orang yang dicintainya setelah
                                multiverse terbuka. Dengan bantuan Doctor Strange, Peter mencoba mengembalikan kehidupannya yang normal, tetapi ketika penjahat dari realitas lain muncul, dia harus menghadapi tantangan besar untuk melindungi dunia dan
                                menghadapi masa depannya yang tak terduga.
                            </p>
                            <a href="https://youtu.be/JfVOs4VSpmA?si=VbVJFz995Z8nWhsj" target="_blank" class="trailer-btn" id="trailerBtn">WATCH TRAILER</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 1917 -->
            <div class="item">
                <img src="/img/gambar-6.jpg" />
                <div class="content">
                    <div class="author">2019</div>
                    <div class="title">1917</div>
                    <div class="topic">Drama, Action, Thriller</div>
                    <div class="author">
                        Film drama perang yang mengikuti perjalanan dua prajurit muda dalam Perang Dunia I yang berusaha mengirim pesan penting untuk menyelamatkan ratusan tentara, dengan teknik pengambilan gambar yang memberikan ilusi seolah-olah
                        diambil dalam satu take panjang.
                    </div>
                    <div class="buttons">
                        <a class="popup-btn" id="seeMoreBtn">SEE MORE</a>
                        <button id="ratingBtn">
                            RATING
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i data-feather="x" class="close-btn"></i></a>
                        <div class="movie-img">
                            <img src="/img/gambar-5.jpg" alt="" />
                        </div>
                        <div class="info">
                            <h2>Godzilla, King of the Monsters<br /><span>2019</span></h2>
                            <p>
                                Film ini menampilkan pertempuran epik antara Godzilla, raja dari semua monster, dan monster-monster lainnya seperti Mothra, Rodan, dan King Ghidorah. Ketika para titan berjuang untuk supremasi, manusia harus berjuang untuk
                                bertahan hidup dan menemukan cara untuk mengendalikan kekuatan mereka. Dalam kekacauan yang melanda dunia, seorang ilmuwan dan sekelompok tentara berusaha untuk menyelamatkan umat manusia dari kehancuran.
                            </p>
                            <a href="https://youtu.be/wVDtmouV9kM?si=rh-DRLTz2WA7HWgO" target="_blank" class="trailer-btn" id="trailerBtn">WATCH TRAILER</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Interstellar -->
            <div class="item">
                <img src="/img/gambar-7.jpg" />
                <div class="content">
                    <div class="author">2014</div>
                    <div class="title">Interstellar</div>
                    <div class="topic">Drama, Adventure</div>
                    <div class="author">
                        Film fiksi ilmiah yang mengikuti sekelompok astronot yang melakukan perjalanan ke luar angkasa untuk mencari planet baru yang dapat dihuni manusia, dengan mengeksplorasi konsep-konsep seperti relativitas waktu dan dimensi
                        lain.
                    </div>
                    <div class="buttons">
                        <a class="popup-btn" id="seeMoreBtn">SEE MORE</a>
                        <button id="ratingBtn">
                            RATING
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i data-feather="x" class="close-btn"></i></a>
                        <div class="movie-img">
                            <img src="/img/gambar-6.jpg" alt="" />
                        </div>
                        <div class="info">
                            <h2>1917<br /><span>2019</span></h2>
                            <p>
                                Film ini mengikuti perjalanan dua prajurit muda, Schofield dan Blake, yang diberi misi untuk menyampaikan pesan penting yang dapat menyelamatkan ratusan tentara di garis depan Perang Dunia I. Dalam perjalanan yang penuh
                                bahaya dan rintangan, mereka harus menyeberangi medan perang yang hancur dan menavigasi melalui pertempuran yang berkecamuk untuk mencapai tujuan mereka. Dengan teknik pengambilan gambar yang inovatif, film ini memberikan
                                pengalaman yang mendalam tentang ketegangan dan pengorbanan dalam perang.
                            </p>
                            <a href="https://youtu.be/gZjQROMAh_s?si=x01KwCQQKvT7oW5Z" target="_blank" class="trailer-btn" id="trailerBtn">WATCH TRAILER</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- IT -->
            <div class="item">
                <img src="/img/gambar-8.jpg" />
                <div class="content">
                    <div class="author">2017</div>
                    <div class="title">IT</div>
                    <div class="topic">Horror, Thriller</div>
                    <div class="author">Film horor yang mengisahkan sekelompok anak yang berusaha menghadapi kekuatan jahat yang mengancam kota kecil mereka, dalam bentuk badut menakutkan yang dikenal sebagai Pennywise.</div>
                    <div class="buttons">
                        <a class="popup-btn" id="seeMoreBtn">SEE MORE</a>
                        <button id="ratingBtn">
                            RATING
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i data-feather="x" class="close-btn"></i></a>
                        <div class="movie-img">
                            <img src="/img/gambar-7.jpg" alt="" />
                        </div>
                        <div class="info">
                            <h2>Interstellar<br /><span>2014</span></h2>
                            <p>
                                Film ini mengisahkan tentang misi kelompok astronaut yang melakukan perjalanan ke luar angkasa untuk mencari planet baru yang dapat dihuni manusia, karena Bumi menghadapi krisis ekologis yang mengancam keberlangsungan
                                hidup manusia. Mereka harus menavigasi melalui lubang cacing dan melewati berbagai tantangan ilmiah serta pribadi dalam upaya untuk menyelamatkan umat manusia dari kepunahan.
                            </p>
                            <a href="https://youtu.be/2LqzF5WauAw?si=--X3-_Rs-ieDobTL" target="_blank" class="trailer-btn" id="trailerBtn">WATCH TRAILER</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ironman -->
            <div class="item">
                <img src="/img/gambar-9.jpg" />
                <div class="content">
                    <div class="author">2008</div>
                    <div class="title">Ironman</div>
                    <div class="topic">Superhero, Action</div>
                    <div class="author">
                        Film yang mengikuti perjalanan Tony Stark dari seorang miliarder playboy yang sombong menjadi pahlawan super yang bertanggung jawab, setelah dia membangun baju besi canggih yang memungkinkannya menjadi Iron Man.
                    </div>
                    <div class="buttons">
                        <a class="popup-btn" id="seeMoreBtn">SEE MORE</a>
                        <button id="ratingBtn">
                            RATING
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i data-feather="x" class="close-btn"></i></a>
                        <div class="movie-img">
                            <img src="/img/gambar-8.jpg" alt="" />
                        </div>
                        <div class="info">
                            <h2>IT<br /><span>2017</span></h2>
                            <p>
                                Berlatar belakang di kota kecil Derry, Maine, film ini mengikuti sekelompok anak yang dihadapkan pada kekuatan jahat dalam bentuk Pennywise, badut menakutkan yang menghantui kota mereka. Mereka memutuskan untuk menghadapi
                                ketakutan mereka dan mengungkap kebenaran tentang kota mereka, melalui petualangan yang penuh horor dan pengorbanan.
                            </p>
                            <a href="https://youtu.be/xKJmEC5ieOk?si=rE2gjwqZAscAfo2W" target="_blank" class="trailer-btn" id="trailerBtn">WATCH TRAILER</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Deadpool -->
            <div class="item">
                <img src="/img/gambar-10.jpg" />
                <div class="content">
                    <div class="author">2016</div>
                    <div class="title">Deadpool</div>
                    <div class="topic">Superhero, Action, Comedy</div>
                    <div class="author">Film yang memperkenalkan karakter anti-pahlawan Marvel Comics, Deadpool, yang terkenal karena gaya humor yang gelap, adegan aksi yang intens, serta penggunaan meta-humor yang unik.</div>
                    <div class="buttons">
                        <a class="popup-btn" id="seeMoreBtn">SEE MORE</a>
                        <button id="ratingBtn">
                            RATING
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </button>
                    </div>
                </div>

                <div class="popup-view">
                    <div class="popup-card">
                        <a><i data-feather="x" class="close-btn"></i></a>
                        <div class="movie-img">
                            <img src="/img/gambar-9.jpg" alt="" />
                        </div>
                        <div class="info">
                            <h2>Ironman<br /><span>2008</span></h2>
                            <p>
                                Mengikuti perjalanan Tony Stark, seorang miliarder playboy dan genius teknologi, yang terperangkap di jantung konflik di Timur Tengah setelah dia ditawan oleh kelompok teroris. Tony membangun baju besi canggih yang
                                memungkinkannya untuk melarikan diri dan bertarung melawan kejahatan sebagai Iron Man. Dalam prosesnya, dia berubah menjadi pahlawan yang bertanggung jawab dan memutuskan untuk menggunakan kekuatannya untuk melawan
                                kejahatan.
                            </p>
                            <a href="https://youtu.be/KAE5ymVLmZg?si=E35jOWksqFkLj08S" target="_blank" class="trailer-btn" id="trailerBtn">WATCH TRAILER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Thumbnail -->
        <div class="thumbnail">
            <div class="item">
                <img src="/img/gambar-1.jpg" />
                <div class="content">
                    <div class="title">Loki</div>
                    <div class="des">2021</div>
                </div>
            </div>
            <div class="item">
                <img src="/img/gambar-2.jpg" />
                <div class="content">
                    <div class="title">Joker</div>
                    <div class="des">2019</div>
                </div>
            </div>
            <div class="item">
                <img src="/img/gambar-3.jpg" />
                <div class="content">
                    <div class="title">John Wick 3</div>
                    <div class="des">2019</div>
                </div>
            </div>
            <div class="item">
                <img src="/img/gambar-4.jpg" />
                <div class="content">
                    <div class="title">Spider-man: No Way Home</div>
                    <div class="des">2021</div>
                </div>
            </div>
            <div class="item">
                <img src="/img/gambar-5.jpg" />
                <div class="content">
                    <div class="title">Godzilla, King of the Monsters!</div>
                    <div class="des">2019</div>
                </div>
            </div>
            <div class="item">
                <img src="/img/gambar-6.jpg" />
                <div class="content">
                    <div class="title">1917</div>
                    <div class="des">2019</div>
                </div>
            </div>
            <div class="item">
                <img src="/img/gambar-7.jpg" />
                <div class="content">
                    <div class="title">Interstellar</div>
                    <div class="des">2014</div>
                </div>
            </div>
            <div class="item">
                <img src="/img/gambar-8.jpg" />
                <div class="content">
                    <div class="title">IT</div>
                    <div class="des">2017</div>
                </div>
            </div>
            <div class="item">
                <img src="/img/gambar-9.jpg" />
                <div class="content">
                    <div class="title">Iron-man</div>
                    <div class="des">2008</div>
                </div>
            </div>
            <div class="item">
                <img src="/img/gambar-10.jpg" />
                <div class="content">
                    <div class="title">Deadpool</div>
                    <div class="des">2016</div>
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i data-feather="x" class="close-btn"></i></a>
                        <div class="movie-img">
                            <img src="/img/gambar-10.jpg" alt="" />
                        </div>
                        <div class="info">
                            <h2>Deadpool<br /><span>2016</span></h2>
                            <p>
                                Film ini memperkenalkan karakter anti-pahlawan Deadpool, yang sebelumnya dikenal sebagai Wade Wilson, seorang mantan tentara bayaran yang diberikan kekuatan penyembuhan yang luar biasa setelah menjadi subjek eksperimen
                                yang mematikan. Deadpool memulai misi pembalasan dendam terhadap orang-orang yang telah menyiksanya, sambil menyelamatkan seorang wanita dari seorang penjahat yang kejam, dalam petualangan yang penuh dengan aksi dan humor
                                gelap.
                            </p>
                            <a href="https://youtu.be/FyKWUTwSYAs?si=KUNCfzSXwbiSqCQf" target="_blank" class="trailer-btn" id="trailerBtn">WATCH TRAILER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- arrow -->
        <div class="arrows">
            <button id="prev">
                <
                    <button id="next">></button>
        </div>
    </div>
    <!-- Hero Section end -->


    <!-- popular section start -->
    <section id="popularmovie" class="popular-movies">
        <h2>Popular <span>Movie</span></h2>
        <div class="movies-grid">
            <a href="/wolverine" class="movie-link">
                <div class="movie">
                    <img src="/img/g1.jpg" alt="Movie 1" />
                    <h3>The Wolverine</h3>
                    <p>Rating: 6.7/10</p>
                </div>
            </a>

            <a href="/harry_potter" class="movie-link">
                <div class="movie">
                    <img src="/img/g2.jpg" alt="Movie 2" />
                    <h3>Harry Potter and the Deathly Hallows</h3>
                    <p>Rating: 7.7/10</p>
                </div>
            </a>

            <a href="/loki" class="movie-link">
                <div class="movie">
                    <img src="/img/g3.jpg" alt="Movie 3" />
                    <h3>Loki</h3>
                    <p>Rating: 8.2/10</p>
                </div>
            </a>

            <a href="/deadpool" class="movie-link">
                <div class="movie">
                    <img src="/img/g4.jpg" alt="Movie 3" />
                    <h3>Deadpool</h3>
                    <p>Rating: 8/10</p>
                </div>
            </a>

            <a href="/iron_man" class="movie-link">
                <div class="movie">
                    <img src="/img/g5.jpg" alt="Movie 3" />
                    <h3>Iron-man</h3>
                    <p>Rating: 7.9/10</p>
                </div>
            </a>

            <a href="/john_wick" class="movie-link">
                <div class="movie">
                    <img src="/img/g6.jpg" alt="Movie 3" />
                    <h3>John Wick: Chapter 4</h3>
                    <p>Rating: 7.7/10</p>
                </div>
            </a>

            <a href="/world_war_z" class="movie-link">
                <div class="movie">
                    <img src="/img/g7.jpg" alt="Movie 3" />
                    <h3>World War Z</h3>
                    <p>Rating: 7/10</p>
                </div>
            </a>

            <a href="/captain_america" class="movie-link">
                <div class="movie">
                    <img src="/img/g8.jpg" alt="Movie 3" />
                    <h3>Captain America: The First Avenger</h3>
                    <p>Rating: 6.9/10</p>
                </div>
            </a>

            <a href="/bumblebee" class="movie-link">
                <div class="movie">
                    <img src="/img/g9.jpg" alt="Bumblebee" />
                    <h3>Bumblebee</h3>
                    <p>Rating: 6.8/10</p>
                </div>
            </a>

            <a href="/doctor_strange" class="movie-link">
                <div class="movie">
                    <img src="/img/g13.jpg" alt="Doctor Strange" />
                    <h3>Doctor Strange</h3>
                    <p>Rating: 7.5/10</p>
                </div>
            </a>

            <a href="/spiderman" class="movie-link">
                <div class="movie">
                    <img src="/img/g14.jpg" alt="Spiderman: No Way Home" />
                    <h3>Spiderman: No Way Home</h3>
                    <p>Rating: 8.5/10</p>
                </div>
            </a>

            <a href="/deadpoolxwolverine" class="movie-link">
                <div class="movie">
                    <img src="/img/deadpolxwolfren.jpg" alt="Movie 3" />
                    <h3>Deadpool X Wolverine</h3>
                    <p>Rating: 8/10</p>
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
                <a href="/Movie_stream/deadpoolxwolfreen.html">
                    <img src="/img/g10.jpg" alt="Upcoming Movie 1" />
                </a>
                <h3>Deadpool & Wolverine</h3>
                <p>Release Date: July 26, 2024</p>
                <div class="countdown" data-release-date="2024-07-26"></div>
            </div>
            <div class="movie">
                <a href="#"><img src="/img/g11.jpg" alt="Upcoming Movie 2" /></a>
                <h3>Venom: The Last Dance</h3>
                <p>Release Date: Oktober 15, 2024</p>
                <div class="countdown" data-release-date="2024-10-25"></div>
            </div>
            <div class="movie">
                <a href="#"><img src="/img/g12.jpg" alt="Upcoming Movie 3" /></a>
                <h3>Kraken: The Hunter</h3>
                <p>Release Date: Desember 13, 2024</p>
                <div class="countdown" data-release-date="2024-12-13"></div>
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
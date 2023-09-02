<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Link to Inter font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <link rel="shortcut icon" href="{{ asset('image/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="style.css"/>
    <title>Blog</title>
</head>

<body>
<div id="preloader"></div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-blue">
            <a class="navbar-brand mr-auto" href="#"
                style="color: white; font-weight: bold; font-size: larger;">DSD</a>
               
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link home-link" href="#" style="color: white; font-weight: 600;">Beranda <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active blog-link" href="#" style="color: white; font-weight: 600;">Blog</a>
                    <a class="nav-item nav-link competition-link" href="#" style="color: white; font-weight: 600;">Lomba</a>
                    <a class="nav-item nav-link about-link" href="#" style="color: white; font-weight: 600;">Tentang</a>
                </div>
            </div>
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link daftar-link" href="#" style="color: white; font-weight: bold;">Daftar</a>
                <a class="nav-item nav-link masuk-link"style="color: white; font-weight:bold;" href="#">Masuk</a>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="btn-group ml-5">
            <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #ffff; color:#6B49D6">
                Bahasa Indonesia
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item change-lang" data-lang="id" style="color:#6B49D6" href="#">Bahasa Indonesia</a>
                <a class="dropdown-item change-lang" data-lang="en" style="color:#6B49D6" href="#">English</a>
            </div>
        </div>
    </div>
    
    <!-- box blog-->
    <div class="box-container">
        <div class="box">
            <div class="strokes">
                <div class="stroke"></div>
                <div class="stroke"></div>
                <div class="stroke"></div>
            </div>
            <div class="blog-text">Blog</div>
        </div>
        <!-- Search box -->
        <div class="search-box">
            <i class="fas fa-search search-icon"></i>
            <input style="color: #929191;" type="text" class="search-input" placeholder="Search..." id="searchInput">
        </div>
    </div>

    <div class="list-container">
        <ul class="horizontal-list">
            <li class="list-item active semua-link">Semua</li>
            <li class="list-item teknologi-link">Teknologi</li>
            <li class="list-item hobi-link">Hobi</li>
            <li class="list-item lifestyle-link">Lifestyle</li>
            <li class="list-item pemrograman-link">Pemrograman</li>
        </ul>
    </div>

    <br>

    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card">
                        <img src="./image/blog/Rectangle 20.png" class="card-img-right" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title cTeknologi-link" style="color:#6B49D6; font-weight: bold; margin-bottom: 10px;">
                                Teknologi</h5>
                            <h3 class="card-title judul-link" style="color:black; font-weight: 600;">Masa Depan Digital:
                                Menjelajahi Dunia Teknologi yang Tak Terbatas</h3>
                            <p class="card-text paragraf-link" style="color:#827F7F; font-weight: 600;">Kami akan memperkenalkan Anda
                                pada inovasi-inovasi terbaru, tren yang sedang berkembang, dan pergeseran paradigma yang
                                dapat mengubah cara kita hidup dan .....</p>
                            <div class="author-info">
                                <img src="./image/blog/Rectangle 21.png" class="author-img" alt="Author">
                                <div class="author-text">
                                    <span class="author-name" style="color:black; font-weight: 600;">Abdul Aziz</span>
                                    <span class="date date-link0" style="color:#8D8D8D; font-weight: 600;">Juli 11, 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- untuk carousel item lagi -->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <br><br><br>

    <div class="container">
        <div class="blog-grid">
            <!-- Blog Card 1 -->
            <div class="blog-card-container">
                <div class="blog-card">
                    <img src="./image/blog/Rectangle 20.png" class="blog-img" alt="Blog Image">
                    <div class="blog-content">
                        <span class="category category-link" style="color:#6B49D6; font-weight: bold; margin-bottom: 10px;">Hobi</span>
                        <h3 class="blog-title blog-title-link" style="color:black; font-weight: bold; margin-bottom: 10px;">Masa Depan Digital: Menjelajahi Dunia Teknologi yang Tak Terbatas</h3>
                        <p class="blog-short-desc blog-short-desc-link" style="color:#5C5C5C; font-weight: bold; margin-bottom: 10px;">Kami
                            akan memperkenalkan Anda pada inovasi-inovasi terbaru, tren yang sedang berkembang, dan
                            pergeseran paradigma yang dapat mengubah cara kita hidup dan .....</p>
                    </div>
                    <div class="author-info">
                        <img src="./image/blog/Rectangle 21.png" class="author-img" alt="Author">
                        <div class="author-text">
                            <span class="author-name" style="color:black; font-weight: bold;">Feliks Ganteng</span>
                            <span class="date date-link" style="color:#8D8D8D; font-weight: 600;">Juli 22, 2023</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-card-container">
                <div class="blog-card">
                    <img src="./image/blog/Rectangle 20.png" class="blog-img" alt="Blog Image">
                    <div class="blog-content">
                        <span class="category category-link2"
                            style="color:#6B49D6; font-weight: bold; margin-bottom: 10px;">Hobi</span>
                        <h3 class="blog-title blog-title-link2" style="color:black; font-weight: bold; margin-bottom: 10px;">Masa Depan
                            Digital: Menjelajahi Dunia Teknologi yang Tak Terbatas</h3>
                        <p class="blog-short-desc blog-short-desc-link2" style="color:#5C5C5C; font-weight: bold; margin-bottom: 10px;">Kami
                            akan memperkenalkan Anda pada inovasi-inovasi terbaru, tren yang sedang berkembang, dan
                            pergeseran paradigma yang dapat mengubah cara kita hidup dan .....</p>
                    </div>
                    <div class="author-info">
                        <img src="./image/blog/Rectangle 21.png" class="author-img" alt="Author">
                        <div class="author-text">
                            <span class="author-name" style="color:black; font-weight: bold;">Feliks Ganteng</span>
                            <span class="date date-link2" style="color:#8D8D8D; font-weight: 600;">Juli 22, 2023</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-card-container">
                <div class="blog-card">
                    <img src="./image/blog/Rectangle 20.png" class="blog-img" alt="Blog Image">
                    <div class="blog-content">
                        <span class="category category-link3"
                            style="color:#6B49D6; font-weight: bold; margin-bottom: 10px;">Hobi</span>
                        <h3 class="blog-title blog-title-link3" style="color:black; font-weight: bold; margin-bottom: 10px;">Masa Depan
                            Digital: Menjelajahi Dunia Teknologi yang Tak Terbatas</h3>
                        <p class="blog-short-desc blog-short-desc-link3" style="color:#5C5C5C; font-weight: bold; margin-bottom: 10px;">Kami
                            akan memperkenalkan Anda pada inovasi-inovasi terbaru, tren yang sedang berkembang, dan
                            pergeseran paradigma yang dapat mengubah cara kita hidup dan .....</p>
                    </div>
                    <div class="author-info">
                        <img src="./image/blog/Rectangle 21.png" class="author-img" alt="Author">
                        <div class="author-text">
                            <span class="author-name" style="color:black; font-weight: bold;">Feliks Ganteng</span>
                            <span class="date date-link3" style="color:#8D8D8D; font-weight: 600;">Juli 22, 2023</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-card-container">
                <div class="blog-card">
                    <img src="./image/blog/Rectangle 20.png" class="blog-img" alt="Blog Image">
                    <div class="blog-content">
                        <span class="category category-link4"
                            style="color:#6B49D6; font-weight: bold; margin-bottom: 10px;">Hobi</span>
                        <h3 class="blog-title blog-title-link4" style="color:black; font-weight: bold; margin-bottom: 10px;">Masa Depan
                            Digital: Menjelajahi Dunia Teknologi yang Tak Terbatas</h3>
                        <p class="blog-short-desc blog-short-desc-link4" style="color:#5C5C5C; font-weight: bold; margin-bottom: 10px;">Kami
                            akan memperkenalkan Anda pada inovasi-inovasi terbaru, tren yang sedang berkembang, dan
                            pergeseran paradigma yang dapat mengubah cara kita hidup dan .....</p>
                    </div>
                    <div class="author-info">
                        <img src="./image/blog/Rectangle 21.png" class="author-img" alt="Author">
                        <div class="author-text">
                            <span class="author-name" style="color:black; font-weight: bold;">Feliks Ganteng</span>
                            <span class="date date-link4" style="color:#8D8D8D; font-weight: 600;">Juli 22, 2023</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-card-container">
                <div class="blog-card">
                    <img src="./image/blog/Rectangle 20.png" class="blog-img" alt="Blog Image">
                    <div class="blog-content">
                        <span class="category category-link5"
                            style="color:#6B49D6; font-weight: bold; margin-bottom: 10px;">Hobi</span>
                        <h3 class="blog-title blog-title-link5" style="color:black; font-weight: bold; margin-bottom: 10px;">Masa Depan
                            Digital: Menjelajahi Dunia Teknologi yang Tak Terbatas</h3>
                        <p class="blog-short-desc blog-short-desc-link5" style="color:#5C5C5C; font-weight: bold; margin-bottom: 10px;">Kami
                            akan memperkenalkan Anda pada inovasi-inovasi terbaru, tren yang sedang berkembang, dan
                            pergeseran paradigma yang dapat mengubah cara kita hidup dan .....</p>
                    </div>
                    <div class="author-info">
                        <img src="./image/blog/Rectangle 21.png" class="author-img" alt="Author">
                        <div class="author-text">
                            <span class="author-name" style="color:black; font-weight: bold;">Feliks Ganteng</span>
                            <span class="date date-link5" style="color:#8D8D8D; font-weight: 600;">Juli 22, 2023</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-card-container">
                <div class="blog-card">
                    <img src="./image/blog/Rectangle 20.png" class="blog-img" alt="Blog Image">
                    <div class="blog-content">
                        <span class="category category-link6"
                            style="color:#6B49D6; font-weight: bold; margin-bottom: 10px;">Hobi</span>
                        <h3 class="blog-title blog-title-link6" style="color:black; font-weight: bold; margin-bottom: 10px;">Masa Depan
                            Digital: Menjelajahi Dunia Teknologi yang Tak Terbatas</h3>
                        <p class="blog-short-desc blog-short-desc-link6" style="color:#5C5C5C; font-weight: bold; margin-bottom: 10px;">Kami
                            akan memperkenalkan Anda pada inovasi-inovasi terbaru, tren yang sedang berkembang, dan
                            pergeseran paradigma yang dapat mengubah cara kita hidup dan .....</p>
                    </div>
                    <div class="author-info">
                        <img src="./image/blog/Rectangle 21.png" class="author-img" alt="Author">
                        <div class="author-text">
                            <span class="author-name" style="color:black; font-weight: bold;">Feliks Ganteng</span>
                            <span class="date date-link6" style="color:#8D8D8D; font-weight: 600;">Juli 22, 2023</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ... additional blog cards ... -->
        </div>
    </div>

    <br><br>

    <div class="pagination">
        <a href="#" class="page"><i class="fas fa-chevron-left"></i></a>
        <a href="#" class="page active">1</a>
        <a href="#" class="page">2</a>
        <a href="#" class="page ">3</a>
        <a href="#" class="page">4</a>
        <a href="#" class="page">5</a>
        <a href="#" class="page"><i class="fas fa-chevron-right"></i></a>
    </div>

    <br><br><br>

    <footer class="footer">
        <div class="footer-left">
            <h2 class="footer-title footer-title-link">DSD</h2>
            <p class="footer-desc footer-desc-link">DSD hadir dengan konten untuk membantu meningkatkan kontrol diri, mengurangi
                kecemasan dan memberikan saran praktis untuk mengatasi gejala-gejala kecemasan.</p>
            <button class="contact-button contact-button-link">Hubungi Kami</button>
        </div>
        <div class="footer-center" style="margin-right: -25%;">
            <h3 class="footer-subtitle footer-subtitle-link">Layanan</h3>
            <ul class="footer-links">
                <li><a class ="anime-link" href="#">Anime</a></li>
                <li><a class ="Jurnal-link" href="#">Jurnal Online</a></li>
                <li><a class ="Komunitas-link" href="#">Komuntias</a></li>
                <li><a class ="Blog-link" href="#">Blog</a></li>
            </ul>
        </div>
        <div class="footer-right" style="margin-right: -0%;">
            <h3 class="footer-subtitle">Bantuan dan Panduan</h3>
            <ul class="footer-links">
                <li><a class ="Syarat-link" href="#">Syarat dan Ketentuan</a></li>
                <li><a class ="Kebijakan-link" href="#">Kebijakan Privasi</a></li>
                <li><a class ="Bantuan-link" href="#">Bantuan</a></li>
                <li><a class ="Tentang-link" href="#">Tentang Kami</a></li>
            </ul>
            <div class="social-icons">
                <a href="https://www.instagram.com/uc_suisb/" target="_blank" class="icon-white" style="margin-right: 10px;"><i class="fab fa-instagram" style="font-size: 24px;"></i></a>
                <a href="#" class="icon-white" style="margin-right: 10px;"><i class="fab fa-youtube" style="font-size: 24px;"></i></a>
              </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/language-switcherBlog.js"> </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/loading-asset.js') }}"></script>

</body>

</html>

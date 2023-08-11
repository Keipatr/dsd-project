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

    <!-- Editor.js -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/codex-editor.js'])
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Blog</title>
</head>

<body class="addBlog">
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
                    <a class="nav-item nav-link  " href="#" style="color: white; font-weight: 600;">Beranda <span
                            class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active" href="#" style="color: white; font-weight: 600;">Blog</a>
                    <a class="nav-item nav-link" href="#" style="color: white; font-weight: 600;">Lomba</a>
                    <a class="nav-item nav-link" href="#" style="color: white; font-weight: 600;">Tentang</a>
                </div>
            </div>
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="#" style="color: white; font-weight: bold;">Daftar</a>
                <a class="nav-item nav-link register" href="#">Masuk</a>
            </div>
        </nav>
    </header>

    <div class="workspace" id="editorjs">
   <!-- Editor.js content will go here -->
</div>


    <br><br><br>

    <footer class="footer">
        <div class="footer-left">
            <h2 class="footer-title">DSD</h2>
            <p class="footer-desc">DSD hadir dengan konten untuk membantu meningkatkan kontrol diri, mengurangi
                kecemasan dan memberikan saran praktis untuk mengatasi gejala-gejala kecemasan.</p>
            <button class="contact-button">Contact Us</button>
        </div>
        <div class="footer-center" style="margin-right: -25%;">
            <h3 class="footer-subtitle">Layanan</h3>
            <ul class="footer-links">
                <li><a href="#">Anime</a></li>
                <li><a href="#">Jurnal Online</a></li>
                <li><a href="#">Komunias</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </div>
        <div class="footer-right" style="margin-right: -0%;">
            <h3 class="footer-subtitle">Bantuan dan Panduan</h3>
            <ul class="footer-links">
                <li><a href="#">Syarat dan Ketentuan</a></li>
                <li><a href="#">Kebijakan Privasi</a></li>
                <li><a href="#">Bantuan</a></li>
                <li><a href="#">Tentang Kami</a></li>
            </ul>
            <div class="social-icons">
                <a href="https://www.instagram.com/uc_suisb/" target="_blank" class="icon-white" style="margin-right: 10px;"><i class="fab fa-instagram" style="font-size: 24px;"></i></a>
                <a href="#" class="icon-white" style="margin-right: 10px;"><i class="fab fa-youtube" style="font-size: 24px;"></i></a>
              </div>
        </div>
    </footer>

















    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>


</body>

</html>

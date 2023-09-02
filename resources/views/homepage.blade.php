<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;700&display=swap" rel="stylesheet" />

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="shortcut icon" href="{{ asset('image/favicon.ico') }}" type="image/x-icon">

    <link rel="stylesheet" href="style.css"/>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
          // Skrip JavaScript Anda dimulai di sini
          let list = document.querySelector('.slider .list ');
          let items = document.querySelectorAll('.slider .list .item');
          let dots = document.querySelectorAll('.slider .dots li');
          let prev = document.getElementById('prev');
          let next = document.getElementById('next');

          let active = 0;
          let lengthItems = items.length - 1;

          prev.onclick = function(){
            if(active - 1 < 0){
                active = lengthItems;
            }else{
                active = active - 1;
            }
            reloadSlider();
          }
          next.onclick = function(){
              if(active + 1 > lengthItems){
                  active = 0;
              }else{
                  active = active + 1;
              }
              reloadSlider();
          }
          let refreshSlider = setInterval (()=> {next.click()}, 3000);
          function reloadSlider(){
              let checkLeft = items[active].offsetLeft;
              list.style.left = -checkLeft + 'px';

              let lastActiveDot = document.querySelector('.slider .dots li.active');
              lastActiveDot.classList.remove('active');
              dots[active].classList.add('active');
              clearInterval(refreshSlider);
              refreshSlider = setInterval (()=> {next.click()}, 3000);
          }
          dots.forEach((li, key) =>{
            li.addEventListener('click', function(){
                active = key;
                reloadSlider();
            })
          })
        });
      </script>
  </head>
  <body>
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


<section id="informasi">
  <div class="container">
    <div class="row">
      <div class="col-6 d-flex align-items-center justify-content-center">
        <h1 class ="head-link" id="informasi-kiri">Teruskan Kembangkan Skill-Mu & Siap Jadi Talenta Digital</h1>
      </div>
      <div class="col-6 text-lg-end">
        <img src="images/hero-image.png" alt="Responsive image" class="img-fluid"/>
      </div>
    </div>


        <div class="slider">
            <div class="list">
                <div class="item">
                    <img src="images/terkini1.jpg" >
                </div>
                <div class="item">
                    <img src="images/terkini2.jpg" >
                </div>
                <div class="item">
                    <img src="images/terkini3.jpg" >
                </div>
                <div class="item">
                    <img src="images/terkini4.jpg" >
                </div>
                <div class="item">
                    <img src="images/terkini5.png" >
                </div>
                <div class="item">
                    <img src="images/terkini6.jpg" >
                </div>
            </div>

            <!--Tombol sebelum dan sesudah -->
            <div class="buttons">
                <button id="prev"><</button>
                <button id="next">></button>
            </div>

             <!--dots -->
             <ul class="dots">
                <li class="active"></li>
                <li ></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
             </ul>
        </div>
        {{-- <div class="col mt-3 text-center position-relative"> <!-- Add position-relative class -->
          <!-- Move the dotarrow to the left side -->
          <span class="dotarrow left">
            <div class="circle-content-left">&lt;</div>
          </span>
          <h3>INFORMASI TERKINI</h3>
          <!-- Move the dotarrow to the right side -->
          <span class="dotarrow right">
            <div class="circle-content-right">&gt;</div>
          </span>
        </div> --}}


  </div>
</section>




<section class="container mt-5">
  <div class="row">
            <!-- BAGIAN KIRI -->
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-1">
                        <span class="dot"></span>
                    </div>
                    <div class="col-11 quotes1">
                        <p>Membaca dapat meningkatkan koneksi neuron dalam otak, membantu meningkatkan daya ingat, dan memperkuat kemampuan kognitif, sehingga secara keseluruhan dapat membuat Anda lebih cerdik dan pintar.</p>
                    </div>

                    <div class="col-1 mt-3">
                        <span class="dot"></span>
                    </div>
                    <div class="col-11 mt-3 quotes2">
                        <p>Aktivitas membaca melibatkan proses berpikir kritis dan analitis, memaksa otak untuk bekerja lebih keras, dan mengasah kemampuan pemecahan masalah, sehingga dapat mengembangkan kecerdasan intelektual.</p>
                    </div>

                    <div class="col-1 mt-3">
                        <span class="dot"></span>
                    </div>
                    <div class="col-11 mt-3 quotes3">
                        <p>Selain itu, membaca juga membuka pintu wawasan baru, memperluas pengetahuan, dan meningkatkan pemahaman tentang berbagai topik, yang pada gilirannya dapat membantu Anda menjadi individu yang lebih berpengetahuan dan berpikiran terbuka.</p>
                    </div>
                    <div class="col-12 mt-3 text-center">
                        <button type="button" class="btn btn-warning selengkapnya-link">Selengkapnya</button>
                    </div>
                </div>
            </div>
            <!-- BAGIAN KANAN -->
            <div class="col-lg-7 mt-3 mt-lg-0">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <img src="images/img1.png" alt="" width="100%" class="img-fluid">
                    </div>
                    <div class="col-lg-7 col-md-12 mt-3 mt-lg-0">
                        <div class="row">
                            <div class="col-lg-8 col-md-6 mt-3 mt-lg-2">
                                <img src="images/img2.png" alt="" width="100%" class="img-fluid">
                            </div>
                            <div class="col-lg-8 col-md-6 mt-3 mt-lg-0">
                                <img src="images/img3.png" alt="" width="100%" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="row gx-5">
      <div class="p-5 col text-center mt-lg-5">
        <img src="images/icon1.png" alt="" width="50%" class="img-fluid">
      </div>
  </div>
</section>

    <section id="quotes">
        <div class="container-md mt-5">
            <div class="p-5 row gx-5"style="background-color: #0B44AF">
                <div class="col text-center mt-4 ">
                    <h3 class="text-white quotes4">Keberhasilan dimulai dari</h3>
                    <h5 class="text-white quotes5">tekad untuk mencoba, kesabaran untuk berusaha, dan <br> keyakinan untuk tidak pernah menyerah.</h5>
                </div>
            </div>
        </div>
    </section>

  <section id="posting">
  <div class="container">
    <div class="p-5 row mt-5">
      <div class="col-lg-6">
        <h3 style="font-weight: bold;color: #0B44AF;">SU ISB</h3>
        <img src="images/icon2.png" alt="" width="65">
      </div>
      <div class="row">
        <div class="col-lg-6">
          <h4 class="text-secondary perintah-link">Temukan Postingan dan Info terbaru lewat <br> instaragam Student Union ISB</h4>
          <button class="btn mt-3 btn-outline-primary d-flex align-items-center mt-5" style="color: black;">
            <i class="fab fa-instagram" style="font-size: 32px; color: black; margin-right: 10px;"></i> uc_suisb
          </button>
        </div>
        <div class="col-lg-6 mt-4">
          <div class="row">
            <div class="col-4 mb-4" style="margin-left: -20px;margin-top: -20px;">
              <img src="images/img4.png" alt="" class="img-fluid">
            </div>
            <div class="col-4 mb-4" style="margin-left: -20px;margin-top: -20px;">
              <img src="images/img5.png" alt="" class="img-fluid">
            </div>
            <div class="col-4 mb-4" style="margin-left: -20px;margin-top: -20px;">
              <img src="images/img6.png" alt="" class="img-fluid">
            </div>
            <div class="col-4 mb-4" style="margin-left: -20px;margin-top: -20px;">
              <img src="images/img7.png" alt="" class="img-fluid">
            </div>
            <div class="col-4 mb-4" style="margin-left: -20px;margin-top:-20px;">
              <img src="images/img8.png" alt="" class="img-fluid">
            </div>
            <div class="col-4 mb-4" style="margin-left: -20px;margin-top:-20px;">
              <img src="images/img9.png" alt="" class="img-fluid">
            </div>
            <div class="col-4 mb-4" style="margin-left: -20px;margin-top: -20px;">
              <img src="images/img10.png" alt="" class="img-fluid">
            </div>
            <div class="col-4 mb-4" style="margin-left: -20px;margin-top:-20px;">
              <img src="images/img11.png" alt="" class="img-fluid">
            </div>
            <div class="col-4 mb-4" style="margin-left: -20px;margin-top:-20px;">
              <img src="images/img12.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    <!--FOOTER-->
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
            <h3 class="footer-subtitle panduan-link ">Bantuan dan Panduan</h3>
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
    <!-- End of Footer -->

    <script src="js/language-switcherHome.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    {{-- <script src="../js/carousel.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> --}}

  </body>
</html>


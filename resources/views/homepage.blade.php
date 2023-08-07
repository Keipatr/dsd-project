<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;700&display=swap" rel="stylesheet" />

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #6b49d6">
      <div class="container">
          <a class="navbar-brand" href="#">DSD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link text-white" aria-current="page">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white">Blog</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white">Lomba</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white">Tentang</a>
                  </li>
              </ul>
          </div>
          <div class="justify-content-end" id="navbarNavDropdown">
              <ul class="navbar-nav" style="display: flex">
                  <li class="nav-item" style="padding-right: 10px">
                      <a class="nav-link text-white" href="#">Daftar</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link register" style="background-color: white; color: #6b49d6">Masuk</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
  

<section id="informasi">
  <div class="container">
    <div class="row">
      <div class="col-6 d-flex align-items-center justify-content-center">
        <h1 id="informasi-kiri">Teruskan Kembangkan Skill-Mu & Siap Jadi Talenta Digital</h1>
      </div>
      <div class="col-6 text-lg-end">
        <img src="images/hero-image.png" alt="Responsive image" class="img-fluid"/>
      </div>
    </div>

    <div class="terkini mt-5">
      <div class="row">
        <div class="col mt-3 text-center position-relative"> <!-- Add position-relative class -->
          <!-- Move the dotarrow to the left side -->
          <span class="dotarrow left">
            <div class="circle-content-left">&lt;</div>
          </span>
          <h3>INFORMASI TERKINI</h3>
          <!-- Move the dotarrow to the right side -->
          <span class="dotarrow right">
            <div class="circle-content-right">&gt;</div>
          </span>
        </div>
      </div>
    </div>
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
                    <div class="col-11">
                        <p>Membaca dapat meningkatkan koneksi neuron dalam otak, membantu meningkatkan daya ingat, dan memperkuat kemampuan kognitif, sehingga secara keseluruhan dapat membuat Anda lebih cerdik dan pintar.</p>
                    </div>

                    <div class="col-1 mt-3">
                        <span class="dot"></span>
                    </div>
                    <div class="col-11 mt-3">
                        <p>Aktivitas membaca melibatkan proses berpikir kritis dan analitis, memaksa otak untuk bekerja lebih keras, dan mengasah kemampuan pemecahan masalah, sehingga dapat mengembangkan kecerdasan intelektual.</p>
                    </div>

                    <div class="col-1 mt-3">
                        <span class="dot"></span>
                    </div>
                    <div class="col-11 mt-3">
                        <p>Selain itu, membaca juga membuka pintu wawasan baru, memperluas pengetahuan, dan meningkatkan pemahaman tentang berbagai topik, yang pada gilirannya dapat membantu Anda menjadi individu yang lebih berpengetahuan dan berpikiran terbuka.</p>
                    </div>
                    <div class="col-12 mt-3 text-center">
                        <button type="button" class="btn btn-warning">Selengkapnya</button>
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
            <div class="p-5 row gx-5"style="background-color: #6b49d6">
                <div class="col text-center mt-4 ">
                    <h3 class="text-white">Keberhasilan dimulai dari</h3>
                    <h5 class="text-white">tekad untuk mencoba, kesabaran untuk berusaha, dan <br> keyakinan untuk tidak pernah menyerah.</h5>
                </div>
            </div>
        </div>
    </section>

  <section id="posting">
  <div class="container">
    <div class="p-5 row mt-5">
      <div class="col-lg-6">
        <h3 style="font-weight: bold;color: #6b49d6;">SU ISB</h3>
        <img src="images/icon2.png" alt="" width="65">
      </div>
      <div class="row">
        <div class="col-lg-6">
          <h4 class="text-secondary">Temukan Postingan dan Info terbaru lewat <br> instaragam Student Union ISB</h4>
          <button class="btn mt-3 btn-outline-primary d-flex align-items-center mt-5" style="color: black;">
            <i class="fa fa-instagram" style="font-size: 32px; color: black; margin-right: 10px;"></i> uc_suisb
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
    <footer style="background-color: #6b49d6;">
      <div class="container p-4">
        <div class="row">
          <div class="col-lg-6 col-md-12 mb-4">
            <h5 class="mb-3" style="letter-spacing: 2px; font-size: 32px; font-weight: 800; color: white;">DSD</h5>
            <p style="color: white; font-size: 14px;">DSD hadir dengan konten untuk membantu <br>meningkatkan kontrol diri, mengurangi <br>kecemasan dan memberikan saran praktis <br>untuk mengatasi gejala-gejala kecemasan.</p>
            <button type="button" class="btn btn-light" style="color: #6b496b; font-size: 16px; font-weight: 600;">Contact Us</button>
          </div>
          <div class="col-lg-2 col-md-4 mb-4">
            <h5 class="mb-3" style="letter-spacing: 2px; font-size: 20px; font-weight: 700; color: white;">DSD</h5>
            <ul class="list-unstyled mb-0">
              <li class="mb-1">
                <a href="#!" style="color: white;">Tentang Kami</a>
              </li>
              <li class="mb-1">
                <a href="#!" style="color: white;">Blog</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-4 mb-4">
            <h5 class="mb-3" style="letter-spacing: 2px; font-size: 20px; font-weight: 700; color: white;">Layanan</h5>
            <ul class="list-unstyled mb-0">
              <li class="mb-1">
                <a href="#!" style="color: white;">Anime</a>
              </li>
              <li class="mb-1">
                <a href="#!" style="color: white;">Jurnal Online</a>
              </li>
              <li class="mb-1">
                <a href="#!" style="color: white;">Komunitas</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-4 mb-4">
            <h5 class="mb-3" style="letter-spacing: 2px; font-size: 20px; font-weight: 700; color: white;">Bantuan dan Panduan</h5>
            <ul class="list-unstyled mb-0">
              <li class="mb-1">
                <a href="#!" style="color: white;">Syarat dan Ketentuan</a>
              </li>
              <li class="mb-1">
                <a href="#!" style="color: white;">Kebijakan Privasi</a>
              </li>
              <li class="mb-1">
                <a href="#!" style="color: white;">Bantuan</a>
              </li>
            </ul>
            <div class="row">
                <div class="col">
                    <a href="#"><img class="img-responsive" src="images/instagram.png" data-bs-hover-animate="pulse" style="padding-top:20px;padding-bottom:20px;"></a>
                </div>
                <div class="col">
                    <a href="#"><img class="img-responsive" src="images/linkedin.png" data-bs-hover-animate="pulse" style="padding-top:20px;padding-bottom:20px;"></a>
                </div>
                <div class="col">
                  <a href="#"><img class="img-responsive" src="images/youtube.png" data-bs-hover-animate="pulse" style="padding-top:20px;padding-bottom:20px;"></a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End of Footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>



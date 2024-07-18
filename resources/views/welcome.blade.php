
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Aku Sampah Bandung</title>
  <meta content="" name="Aku Sampah Bandung adalah projek UAS kelompok 1 di mata kuliah Pemograman Web II. Tujuan dari website ini adalah untuk merekam laporan sampah yang ada di Bandung di setiap kecamatannya">
  <meta content="" name="sampah bandung, aku sampah bandung, sampah di bandung, bandung sampah,">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">  

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Lumia
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="#hero">Aku Sampah</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#services">Pelayanan</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Lapor Sampah</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Petugas Terbaik</a></li>
          <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('login') }}">Login</a></li>
              <li><a href="{{ url('register') }}">Register</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Selamat Datang di <span>Aku Sampah</span></h1>
      <h2>kami berharap dapat berkontribusi secara signifikan dalam menjaga Bandung tetap bersih dan hijau.</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= What We Do Section ======= -->
    <section id="what-we-do" class="what-we-do">
      <div class="container">

        <div class="section-title">
          <h2>Apa yang Kami Lakukan</h2>
          <p>Kami menyediakan berbagai layanan pengelolaan sampah yang dirancang untuk menjaga kebersihan dan keindahan kota Bandung.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Pengelolaan Sampah Rumah Tangga</a></h4>
              <p>Kami menyediakan layanan pengangkutan sampah rumah tangga yang terjadwal, memastikan lingkungan Anda tetap bersih dan nyaman.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Pendidikan dan Kesadaran Lingkungan</a></h4>
              <p>Kami mengadakan berbagai program edukasi dan kampanye untuk meningkatkan kesadaran masyarakat tentang pentingnya pengelolaan sampah yang baik dan benar.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Daur Ulang dan Pengolahan Sampah</a></h4>
              <p>Kami memilah dan mendaur ulang sampah untuk mengurangi jumlah sampah yang berakhir di TPA, membantu menjaga kelestarian lingkungan</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End What We Do Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Tentang Kami</h3>
            <p>
              Di Aku Sampah, kami berdedikasi untuk menjaga kebersihan dan keindahan kota Bandung melalui pengelolaan sampah yang efektif dan berkelanjutan. Kami berkomitmen untuk memberikan pelayanan terbaik kepada masyarakat dengan solusi inovatif dalam pengelolaan sampah.
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> Pelayanan Cepat dan Efisien.</li>
              <li><i class="bx bx-check-double"></i> Kolaborasi dengan Komunitas.</li>
            </ul>
            <div class="row icon-boxes">
              <div class="col-md-6">
                <i class="bx bx-receipt"></i>
                <h4>Pengelolaan Sampah Berbasis Lingkungan</h4>
                <p>Kami menggunakan teknologi terbaru untuk memastikan sampah dikelola dengan cara yang ramah lingkungan, mengurangi dampak negatif terhadap alam.</p>
              </div>
              <div class="col-md-6 mt-4 mt-md-0">
                <i class="bx bx-cube-alt"></i>
                <h4>Edukasi dan Kesadaran Masyarakat</h4>
                <p>Kami mengadakan berbagai program edukasi untuk meningkatkan kesadaran masyarakat tentang pentingnya pengelolaan sampah yang baik dan benar.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    {{-- <section id="skills" class="skills">
      <div class="container">

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section --> --}}

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1" class="purecounter"></span>
              <p>Kecamatan di Bandung</p>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="60" data-purecounter-duration="1" class="purecounter"></span>
              <p>Ton Sampah</p>
            </div>
          </div>

          <div class="col-lg-3 col-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="90" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hari Beroperasi</p>
            </div>
          </div>

          <div class="col-lg-3 col-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="332" data-purecounter-duration="1" class="purecounter"></span>
              <p>Petugas</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Pelayanan</h2>
          <p>Kami melayani masyarakat Bandung untuk membersihkan dan mengelola sampah untuk menjaga kebersihan dan menfaatkan sampah yang bisa dimanfaatkan</p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4><a href="#">Pengangkutan Sampah</a></h4>
              <p>Kami menyediakan layanan pengangkutan sampah secara terjadwal untuk memastikan kebersihan lingkungan Anda.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#">Pemisahan dan Daur Ulang</a></h4>
              <p>Kami memilah sampah untuk mendaur ulang bahan yang dapat digunakan kembali, mengurangi dampak terhadap lingkungan.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#">Edukasi Lingkungan</a></h4>
              <p>Kami mengedukasi masyarakat tentang pentingnya pengelolaan sampah yang baik dan ramah lingkungan.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h4><a href="#">Layanan Cepat</a></h4>
              <p>Layanan pengelolaan sampah kami dilakukan dengan cepat dan efisien, menjaga lingkungan tetap bersih</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-brightness-high"></i>
              <h4><a href="#">Pengelolaan Sampah Organik</a></h4>
              <p>Kami mengelola sampah organik menjadi kompos yang bermanfaat bagi pertanian dan penghijauan</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-calendar4-week"></i>
              <h4><a href="#">Pelayanan Industri</a></h4>
              <p>Layanan khusus untuk pengelolaan sampah industri dengan metode yang aman dan sesuai regulasi</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Lapor Sampah</h2>
          <p>Contoh sampah yang dapat dilaporankan:</p>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-organik">Organik</li>
              <li data-filter=".filter-anorganik">Anorganik</li>
              <li data-filter=".filter-b3">B3</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-organik wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/jenis-sampah/organik/organik1.jpg" class="img-fluid" alt="">
                <a href="assets/img/jenis-sampah/organik/organik1.jpg" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Bagian Tumbuhan"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Bagian tumbuhan</a></h4>
                <p style="color: green">Organik</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-organik wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/jenis-sampah/organik/organik2.jpg" class="img-fluid" alt="">
                <a href="assets/img/jenis-sampah/organik/organik2.jpg" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Sampah Daun"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Sisa Makanan</a></h4>
                <p style="color: green">Organik</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-organik wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/jenis-sampah/organik/organik3.jpg" class="img-fluid" alt="">
                <a href="assets/img/jenis-sampah/organik/organik3.jpg" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Sampah Daun"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Kulit Buah</a></h4>
                <p style="color: green">Organik</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-organik wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/jenis-sampah/organik/organik4.jpg" class="img-fluid" alt="">
                <a href="assets/img/jenis-sampah/organik/organik4.jpg" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Sampah Daun"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Daun Kering</a></h4>
                <p style="color: green">Organik</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-organik wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/jenis-sampah/organik/organik5.jpg" class="img-fluid" alt="">
                <a href="assets/img/jenis-sampah/organik/organik5.jpg" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Sampah Daun"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Ampas Kopi</a></h4>
                <p style="color: green">Organik</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-organik wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/jenis-sampah/organik/organik6.jpg" class="img-fluid" alt="">
                <a href="assets/img/jenis-sampah/organik/organik6.jpg" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Sampah Daun"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Kantong Teh</a></h4>
                <p style="color: green">Organik</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-organik wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/jenis-sampah/organik/organik7.jpg" class="img-fluid" alt="">
                <a href="assets/img/jenis-sampah/organik/organik7.jpg" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Sampah Daun"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Cangkang Telur</a></h4>
                <p style="color: green">Organik</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-organik wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/jenis-sampah/organik/organik8.jpg" class="img-fluid" alt="">
                <a href="assets/img/jenis-sampah/organik/organik8.jpg" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Sampah Daun"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Sampah Daun</a></h4>
                <p style="color: green">Organik</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-organik wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/jenis-sampah/organik/organik9.jpg" class="img-fluid" alt="">
                <a href="assets/img/jenis-sampah/organik/organik9.jpg" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Sampah Daun"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Kotoran</a></h4>
                <p style="color: green">Organik</p>
              </div>
            </div>
          </div> 
          {{-- akhir jenis sampah organik --}}



          {{-- // Awal sampah Anorganik --}}
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-anorganik wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/jenis-sampah/anorganik/anorganik1.jpg" class="img-fluid" alt="">
                <a href="assets/img/jenis-sampah/anorganik/anorganik1.jpg" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Sampah Daun"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Keramik</a></h4>
                <p style="color: rgb(153, 153, 9)">Anorganik</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-anorganik wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/jenis-sampah/anorganik/anorganik2.jpg" class="img-fluid" alt="">
                <a href="assets/img/jenis-sampah/anorganik/anorganik2.jpg" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Sampah Daun"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Pecahan Kaca</a></h4>
                <p style="color: rgb(153, 153, 9)">Anorganik</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-anorganik wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/jenis-sampah/anorganik/anorganik3.jpg" class="img-fluid" alt="">
                <a href="assets/img/jenis-sampah/anorganik/anorganik3.jpg" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Sampah Daun"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Paku Berkarat</a></h4>
                <p style="color: rgb(153, 153, 9)">Anorganik</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-anorganik wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/jenis-sampah/anorganik/anorganik4.jpg" class="img-fluid" alt="">
                <a href="assets/img/jenis-sampah/anorganik/anorganik4.jpg" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Sampah Daun"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Botol Plastik</a></h4>
                <p style="color: rgb(153, 153, 9)">Anorganik</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-anorganik wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/jenis-sampah/anorganik/anorganik5.jpg" class="img-fluid" alt="">
                <a href="assets/img/jenis-sampah/anorganik/anorganik5.jpg" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Sampah Daun"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Kaleng Bekas</a></h4>
                <p style="color: rgb(153, 153, 9)">Anorganik</p>
              </div>
            </div>
          </div>
          {{-- akhir sampah anorganik --}}

          <div class="col-lg-4 col-md-6 portfolio-item filter-b3 wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/jenis-sampah/b3/b3-1.jpg" class="img-fluid" alt="">
                <a href="assets/img/jenis-sampah/b3/b3-1.jpg" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Sampah Daun"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Baterai bekas</a></h4>
                <p style="color: red">B3</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-b3 wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/jenis-sampah/b3/b3-2.jpg" class="img-fluid" alt="">
                <a href="assets/img/jenis-sampah/b3/b3-2.jpg" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Sampah Daun"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Lampu pijar bekas</a></h4>
                <p style="color: red">B3</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-b3 wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/jenis-sampah/b3/b3-3.jpg" class="img-fluid" alt="">
                <a href="assets/img/jenis-sampah/b3/b3-3.jpg" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Sampah Daun"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Cat dan pelarut cat</a></h4>
                <p style="color: red">B3</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-b3 wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/jenis-sampah/b3/b3-4.jpg" class="img-fluid" alt="">
                <a href="assets/img/jenis-sampah/b3/b3-4.jpg" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Sampah Daun"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Pestisida dan insektisida</a></h4>
                <p style="color: red">B3</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-b3 wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/jenis-sampah/b3/b3-5.jpg" class="img-fluid" alt="">
                <a href="assets/img/jenis-sampah/b3/b3-5.jpg" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Sampah Daun"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Bahan kimia rumah tangga</a></h4>
                <p style="color: red">B3</p>
              </div>
            </div>
          </div>
          {{-- akhir sampah b3 --}}

        </div>

      </div>
    </section><!-- End Portfolio Section -->




    {{-- <section id="testimonials" class="testimonials section-bg">
      <div class="section-title">
          <h2>Lapor Sampah</h2>
          <p>Laporan Sampah pada Bulan Juli:</p>
          <br>
          <br>
          @component('components.laporan-table', ['laporans' => $laporans])
          @endcomponent
      </div>
  </section> --}}




    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Petugas Terbaik</h2>
          <p>Kami mengapresiasi upaya kebersihan yang dilakukan oleh berbagai petugas di Bandung. Berikut adalah daftar petugas terbaik yang telah berhasil menjaga lingkungan mereka tetap bersih dan sehat.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Gedebage</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Katapang</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Antapani</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Rancasari</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Sukajadi</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <p>Sit sint consectetur velit quos quisquam cupiditate nemo qui</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" alt="">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <p>
                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" alt="">
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <p>
                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" alt="">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Bergabung menjadi salah satu petugas</p>
        </div>

        <div class="row mt-5 justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Bandung<br>Katapang, Indonesia</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@akusampahbdg.com<br>akusampahbdg@example.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center">
          <div class="col-lg-10">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Maksud" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Aku Sampah</h3>
            <p>
              Kelompok 1 <br>
              Bandung<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 1234 4321 1122<br>
              <strong>Email:</strong> akusampahbdg@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pelayanan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          {{-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> --}}

          {{-- <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div> --}}

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Aku Sampah</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/lumia-bootstrap-business-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
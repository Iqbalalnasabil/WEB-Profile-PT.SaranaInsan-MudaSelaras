<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>PT. SaranaInsan MudaSelaras</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.jpg" rel="icon" />
    <link href="assets/img/apple-touch-icon.jfif" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link
      href="assets/vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">
      <div
        class="container-fluid container-xl d-flex align-items-center justify-content-between"
      >
        <a href="index.html" class="logo d-flex align-items-center">
          <img src="assets/img/favicon.jfif" alt="image" />
        </a>

        <em class="mobile-nav-toggle mobile-nav-show bi bi-list"></em>
        <em class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></em>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="/" class="active">HOME</a></li>
            <li class="dropdown">
              <a href="/profil"
                ><span>PROFIL</span>
                <em class="bi bi-chevron-down dropdown-indicator"></em
              ></a>
              <ul>
                <li>
                  <a href="/profil#programkami">SOCIAL RESPONSIBILITY & COMMUNITY DEVELOPMENT</a>
                </li>
              </ul>
            </li>
            <li><a href="/legalitas">LEGALITAS DAN LISENSI</a></li>
            <li class="dropdown">
              <a href="#"
                ><span>POWER PRODUCT</span>
                <em class="bi bi-chevron-down dropdown-indicator"></em
              ></a>
              <ul>
                <li><a href="https://lifemedia.id/">LIFE MEDIA</a></li>
                <li><a href="#">JOGJA MEDIANET</a></li>
              </ul>
            </li>
            <li><a href="/Layanan">LAYANAN</a></li>
            <li><a href="/pelanggan">PELANGGAN DAN MITRA</a></li>
            <li><a href="/Contact">CONTACT</a></li>
          </ul>
        </nav>
        <!-- .navbar -->
      </div>
    </header>

    <!-- End Header -->

 <!-- End Header -->
<section id="hero" class="hero">
  
  <div
    id="hero-carousel"
    class="carousel slide"
    data-bs-ride="carousel"
    data-bs-interval="5000">

    @foreach ($sliders as $slider)
    <div class="carousel-item active" {{$sliders === 0 ? 'active' : ''}} >
     <img src="/image/{{$slider->image}}" style="width: 100%" height="1080px" max-width="390px">
      <div class="row d-flex align-items-center">
        <div class="container text-center">
            <h1 data-aos="fade-down">{{$slider->title}}</h1>
            <h2 data-aos="fade-up">{{$slider->description}}</h2>
        </div> 
      </div>
    </div>
    @endforeach
    <a
      class="carousel-control-prev"
      href="#hero-carousel"
      role="button"
      data-bs-slide="prev"
    >
      <span
        class="carousel-control-prev-icon bi bi-chevron-left"
        aria-hidden="true"
      ></span>
    </a>

    <a
      class="carousel-control-next"
      href="#hero-carousel"
      role="button"
      data-bs-slide="next"
    >
      <span
        class="carousel-control-next-icon bi bi-chevron-right"
        aria-hidden="true"
      ></span>
    </a>
  </div>
</section>
<!-- End Hero Section -->

    <section id="hero" class="d-flex align-items-center">
      <div
        class="container position-relative"
        data-aos="fade-up"
        data-aos-delay="100"
      >
        <div class="row icon-boxes">
          <div
            class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            data-aos="zoom-in"
            data-aos-delay="200"
          >
            <div class="icon-box">
              <div class="icon"><em class="far fa-building"></em></div>
              <h4 class="title"><a href="/profil">PROFIL</a></h4>
              <p class="description">
                PT. SaranaInsan MudaSelaras (SIMS) merupakan sebuah perusahaan
                Penyelenggara Jaringan dan Multimedia.
              </p>
            </div>
          </div>

          <div
            class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            data-aos="zoom-in"
            data-aos-delay="300"
          >
            <div class="icon-box">
              <div class="icon">
                <em class="fas fa-file-signature color1"></em>
              </div>
              <h4 class="title">
                <a href="/legalitas">LEGALITAS & LISENSI</a>
              </h4>
              <p class="description">
                PT. SaranaInsan MudaSelaras (SIMS) mempunyai lisensi nasional
                dalam bidang jasa layanan multimedia.
              </p>
            </div>
          </div>

          <div
            class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            data-aos="zoom-in"
            data-aos-delay="400"
          >
            <div class="icon-box">
              <div class="icon">
                <em class="fas fa-hand-holding-heart color2"></em>
              </div>
              <h4 class="title"><a href="/layanan">LAYANAN</a></h4>
              <p class="description">
                Melalui beberapa anak perusahaan PT. SaranaInsan MudaSelaras
                (SIMS) memberikan beragam layanan jaringan dan multimedia yang
                berkualitas dan lengkap.
              </p>
            </div>
          </div>

          <div
            class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            data-aos="zoom-in"
            data-aos-delay="500"
          >
            <div class="icon-box">
              <div class="icon"><em class="fas fa-users color3"></em></div>
              <h4 class="title">
                <a href="/pelanggan">PELANGGAN & MITRA</a>
              </h4>
              <p class="description">
                PT. SaranaInsan MudaSelaras (SIMS) memiliki pelanggan dan mitra
                dari beragam segmen, mulai dari segmen Pemerintahan, Pendidikan,
                dan Internet Service Provider.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero Section -->

    <main id="main"></main>
    <!--End Main-->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="footer-content position-relative">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="footer-info">
                <h4>HUBUNGI KAMI</h4>
                <address>
                  <p>
                    <em class="fa fa-map-marker"></em>
                    {{$contact->alamat}}
                  </p>

                  <p>
                    <em class="fa fa-phone"></em>
                    <a href="tel:{{$contact->nophone}}"> {{$contact->nophone}}</a>
                  </p>

                  <p>
                    <em class="fa fa-envelope"></em>
                    <a href="mailto:info@sims.co.id">{{$contact->email}}</a>
                  </p>

                  <p>
                    <em class="fa fa-globe"></em>
                    sims.co.id
                  </p>
                </address>
              </div>
            </div>
            <!-- End footer info column-->
          </div>
        </div>
      </div>

      <div class="footer-legal text-center position-relative">
        <div class="container">
          <div class="copyright">
            &copy; Copyright
            <strong><span>PT. SARANA INSANMUDA SELARAS</span></strong
            >. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><em class="bi bi-arrow-up-short"></em
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>

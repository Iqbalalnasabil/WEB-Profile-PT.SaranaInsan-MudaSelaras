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

    <link rel="stylesheet" href="assets/css/layanan.css" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">
      <div
        class="container-fluid container-xl d-flex align-items-center justify-content-between"
      >
        <a href="index.html" class="logo d-flex align-items-center">
          <img src="assets/img/favicon.jfif" alt="asset_icon" />
        </a>

        <em class="mobile-nav-toggle mobile-nav-show bi bi-list"></em>
        <em class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></em>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="/">HOME</a></li>
            <li class="dropdown">
              <a href="/profil"
                ><span>PROFIL</span>
                <em class="bi bi-chevron-down dropdown-indicator"></em
              ></a>
              <ul>
                <li>
                  <a href="/profil#programkami"
                    >SOCIAL RESPONSIBILITY &<br />
                    COMMUNITY DEVELOPMENT</a
                  >
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
            <li><a href="/Layanan" class="active">LAYANAN</a></li>
            <li><a href="/pelanggan">PELANGGAN DAN MITRA</a></li>
            <li><a href="/Contact">CONTACT</a></li>
          </ul>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <main id="main">
      <!-- ======= Hero Section ======= -->
      <section id="hero" class="hero">
        <div class="row d-flex align-items-center">
          <div class="container text-center">
            <h1 data-aos="fade-down">Layanan</h1>
            <a href="/" data-aos="fade-up"><strong>Home</strong></a
            ><a data-aos="fade-up"> | Layanan</a>
          </div>
        </div>

        <div
          id="hero-carousel"
          class="carousel slide"
          data-bs-ride="carousel"
          data-bs-interval="5000"
        >
          <div
            class="carousel-item active"
            style="background-image: url(assets/img/hero-bg.jpg)"
          ></div>
        </div>
      </section>
      <!-- End Hero Section -->

      <!-- ======= Layanan Section ======= -->
      <section id="services" class="services section-bg">
        <div class="container-myLayanan" data-aos="fade-up">
          <div class="layanan"><strong>Layanan</strong></div>
          <div class="row">
            <div class="container-card"> 
              @foreach ($layanans as $layanan)
              <div class="card" style="width: 18rem">
                <img
                  src="/image/{{$layanan->image}}"
                  class="card-img-top"
                />
                <div class="card-body">
                  <h5 class="card-title">{{$layanan->title}}</h5>
                  <p class="card-text">{{$layanan->description}}</p>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </section>
      <!-- Layanan Section -->
    </main>
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
                    <a href="mailto:{{$contact->email}}">{{$contact->email}}</a>
                  </p>

                  <p>
                    <em class="fa fa-globe"></em>
                    sims.co.id
                  </p>
                </address>
              </div>
            </div>

            <!-- End footer info column-->

            <!-- <div class="col footer-links">
              <h4>KUNJUNGI KAMI</h4>
              <div class="textwidget custom-html-widget">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3955976343636!2d106.82771891431021!3d-6.211442262570332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f40f56e2d7af%3A0x5cf7c3803a23f8b2!2sWisma%20Kodel%2C%20Jl.%20H.%20R.%20Rasuna%20Said%2C%20RT.10%2FRW.7%2C%20Kuningan%2C%20Setia%20Budi%2C%20Kecamatan%20Setiabudi%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012920!5e0!3m2!1sid!2sid!4v1594172458370!5m2!1sid!2sid"
                  width="500"
                  height="300"
                  style="border: 0"
                  allowfullscreen=""
                  aria-hidden="false"
                  tabindex="0"
                  title="tittle"
                ></iframe>
              </div>
            </div> -->
            <!-- End footer links column-->
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

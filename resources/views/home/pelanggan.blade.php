<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PT. SaranaInsan MudaSelaras</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.jfif" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
  
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/favicon.jfif" alt="image assets">
      </a>
  
      <em class="mobile-nav-toggle mobile-nav-show bi bi-list"></em>
      <em class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></em>
      
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">HOME</a></li>
          <li class="dropdown"><a href="/profil"><span>PROFIL</span> <em class="bi bi-chevron-down dropdown-indicator"></em></a>
            <ul>
              <li><a href="/profil#programkami">SOCIAL RESPONSIBILITY &<br> COMMUNITY DEVELOPMENT</a></li>
            </ul>
          </li>
          <li><a href="/legalitas">LEGALITAS DAN LISENSI</a></li>
          <li class="dropdown"><a href="#"><span>POWER PRODUCT</span> <em class="bi bi-chevron-down dropdown-indicator"></em></a>
            <ul>
              <li><a href="https://lifemedia.id/">LIFE MEDIA</a></li>
              <li><a href="#">JOGJA MEDIANET</a></li>
            </ul>
          </li>
          <li><a href="/Layanan">LAYANAN</a></li>
          <li><a href="/pelanggan" class="active">PELANGGAN DAN MITRA</a></li>
          <li><a href="/Contact">CONTACT</a></li>
        </ul>
      </nav><!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <main id="main">
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    
    <div class="row d-flex align-items-center">
      <div class="container text-center">
        <h1 data-aos="fade-down">PELANGGAN & MITRA</h1>
        <a href="/" data-aos="fade-up"><strong>Home</strong></a><a data-aos="fade-up"> | Pelanggan Dan Mitra</a>
      </div>
    </div>
      
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-item active" style="background-image: url(assets/img/hero-bg.jpg)"></div>
    </div>
  </section><!-- End Hero Section -->

  <!-- ======= Pelanggan Section ======= -->
  <section id="clients" class="clients section-bg">
    <div class="container" >
      <div class="section-title">
        <h1 id="pelangganmitra"><strong> Pelanggan SIMS </strong></h1>
        <br>
        <h3><p>Segmen Pemerintahan</p></h3>
      </div>
      <div class="row">
        @foreach ($pemerintahans as $pemerintahan)
        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
          <img src="/image/{{$pemerintahan->image}}" class="img-fluid" alt="">
        </div>

      @endforeach
    </div>
</section>
  
<section id="clients" class="clients section-bg">
        <div class="container" >
      <div class="section-title">
        <h3><p>Segmen Pendidikan</p></h3>
      </div>
      <div class="row">
        @foreach ($pendidikans as $pendidikan)
        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
          <img src="/image/{{$pendidikan->image}}" class="img-fluid" alt="">
        </div>
        @endforeach
      </div>
    </section>
  
  
    <section id="clients" class="clients section-bg">
      <div class="container" >
        <div class="section-title">
          <h3><p>Segmen Intenet Service Provider</p></h3>
        </div>
        <div class="row">
          @foreach ($isps as $isp)
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="/image/{{$isp->image}}" class="img-fluid" alt="">
          </div>
          @endforeach
        </div>
      </div>
    </section>
  
    <section id="clients" class="clients section-bg">
      <div class="container" >
    <div class="section-title">
      <br>
      <h3><p>Segmen Telco</p></h3>
    </div>
    <div class="row">
      @foreach ($telcos as $telco)
      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
        <img src="/image/{{$telco->image}}" class="img-fluid" alt="">
      </div>
      @endforeach
    </div>
  </div>
  </section>
  
  <section id="clients" class="clients section-bg">
      <div class="container" >
      <div class="section-title">
        <h1><strong>Mitra SIMS</strong></h1>
        <br>
        <h3><p>Segmen Finance</p></h3>
      </div>
      <div class="row">
        @foreach ($finances as $finance)
        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
          <img src="/image/{{$finance->image}}" class="img-fluid" alt="">
        </div>
        @endforeach
      </div>
    </div>
  </section>
  
  <section id="clients" class="clients section-bg">
    <div class="container" >
        <div class="section-title">
          <h3><p>Segmen Payment Gateway</p></h3>
        </div>
        <div class="row">
          @foreach ($payments as $payment)
        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
          <img src="/image/{{$payment->image}}" class="img-fluid" alt="">
        </div>
        @endforeach
      </div>
    </div>
  </section>
  
  <!-- End Pelanggan Section -->

  </main><!--End Main-->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

  <div class="footer-content position-relative">
    <div class="container">
      <div class="row">

        <div class="col">
          <div class="footer-info">
            <h4>HUBUNGI KAMI</h4>
            <address>
              <p><em class="fa fa-map-marker"></em>
                {{$contact->alamat}}
              </p>
          
              <p><em class="fa fa-phone"></em> <a href="tel:{{$contact->nophone}}">
                {{$contact->nophone}}</a>
              </p>
                
              <p><em class="fa fa-envelope"></em> 
                <a href="mailto:{{$contact->email}}">{{$contact->email}}</a>
              </p>
                
              <p><em class="fa fa-globe"></em>
                sims.co.id
              </p>
            </address>
          </div>
        </div><!-- End footer info column-->
      </div>
    </div>
  </div>

  <div class="footer-legal text-center position-relative">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>PT. SARANA INSANMUDA SELARAS</span></strong>. All Rights Reserved
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
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><em class="bi bi-arrow-up-short"></em></a>


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
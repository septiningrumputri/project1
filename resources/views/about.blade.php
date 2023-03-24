
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Project</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('frontend2') }}//img/favicon.png" rel="icon">
  <link href="{{ asset('frontend2') }}//img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend2') }}//vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('frontend2') }}//vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('frontend2') }}//vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('frontend2') }}//vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('frontend2') }}//vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('frontend2') }}//vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend2') }}//css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Scaffold - v4.7.0
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="index.html">Project</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="{{ asset('frontend2') }}//img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li class="dropdown"><a href="/about"><span>About</span></a></li>
          <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
          <li><a class="nav-link scrollto " href="{{ route('register') }}">Register</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="cta" class="cta">
     
  
      <div data-aos="fade-up" style="background-color:darkred;text-align: center;">
          <h2 style="color:white;">About</h2>
      </div>

      <div class="row">
        <div class="col-md-2 pull-left image" data-aos="fade-up">
          <img src="{{ asset('image') }}/1.jpeg" width="300px">        </div>
        <div class="col-lg-5" data-aos="fade-up" style="padding-left:60px">
          <ul><b>
            <li>Septiningrum Putri Hanafi</li> 
            <li>SeptiningrumPutri@gmail.com</li>
          </b>
          </ul>
        </div>
      </div>
  
      <div class="container">
  
          <div class="row text-center">
              {{-- <?php foreach ($konten as $k) : ?>
                  <div class="col-sm-4 " data-aos="zoom-in" style="padding-top:20px">
                      <img src="<?= base_url('./assets/img/profile/') . $k['image']; ?>" class="card-img" width="300px" height="200px" alt="">
                  </div>
                  <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-right">
                      <div class="content pt-4 pt-lg-0">
                          <h3 style="padding-top: 20px;"><?php echo $k['judul']; ?></h3>
                          <p style="color: grey"><?php echo $k['keterangan']; ?></p>
                      </div>
                  </div>
              <?php endforeach; ?> --}}
          </div>
      </div>
  </section><!-- End Cta Section -->
  

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Project</h3>
              <p>
                <strong>Phone:</strong> +628********<br>
                <strong>Email:</strong> <br>
              </p>
              <div class="social-links mt-3">
                
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/about">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('login') }}">Login</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('register') }}">Register</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Scaffold</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend2') }}//vendor/aos/aos.js"></script>
  <script src="{{ asset('frontend2') }}//vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('frontend2') }}//vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('frontend2') }}//vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('frontend2') }}//vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('frontend2') }}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend2') }}/js/main.js"></script>

</body>

</html>
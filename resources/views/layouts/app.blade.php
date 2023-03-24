<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
    <title>Project</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('frontend')}}bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('frontend')}}bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('frontend')}}bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('frontend')}}dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('frontend')}}plugins/iCheck/square/blue.css">

  

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
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
    
          <div class="logo me-auto">
            <h1><a href="#">Project</a></h1>
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
      </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <!-- Vendor JS Files -->
  <script src="{{ asset('frontend2') }}//vendor/aos/aos.js"></script>
  <script src="{{ asset('frontend2') }}//vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('frontend2') }}//vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('frontend2') }}//vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('frontend2') }}//vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('frontend2') }}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend2') }}/js/main.js"></script>

    <script src="{{ asset('frontend')}}bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('frontend')}}bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="{{ asset('frontend')}}plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>

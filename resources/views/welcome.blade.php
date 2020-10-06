<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">-->
  <!--<link rel="icon" type="image/png" href="assets/img/favicon.png">-->
  <title>
    Surat Gampong
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="assets/css/argon-design-system.css?v=1.2.0" rel="stylesheet" />
</head>

<body class="index-page">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
    <div class="container">
      <a class="navbar-brand mr-lg-5" href="/">
        <img src="/assets/img/brand/banda.png" alt="Image" style="width:80px;height:55px;">
      </a>
      <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item">
                  <a class="nav-link" href="/">APLIKASI SURAT GAMPONG</a>
              </li>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="./assets/img/brand/blue.png">
              </a>
              </ul>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item">
                  <a class="nav-link" href="#">Discover
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="javascript:;" id="navbar-primary_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-primary_dropdown_1">
                <a class="dropdown-item" href="/">Beranda</a>
                @if (Route::has('login'))
                    @auth
                        <a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a class="dropdown-item" href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                        @endif
                    @endif
                @endif
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
             </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- End Navbar -->
  <div class="wrapper">
    <div class="section section-hero section-shaped">
      <div class="shape shape-style-1 shape-primary">
        <span class="span-150"></span>
        <span class="span-50"></span>
        <span class="span-50"></span>
        <span class="span-75"></span>
        <span class="span-100"></span>
        <span class="span-75"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
      <div class="page-header">
        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row">
              <h1 class="display-3  text-white">Website Gampong</h1>
              <p class="lead  text-white">Selamat datang di portal Gampong Punge Jurong Kecamatan Meuraxa Kota Banda Aceh, website ini merupakan media informasi publikasi dan komunikasi Gampong di Kota Banda Aceh dalam menyampaikan informasi kegiatan dan dalam upaya mendukung tercapainya program kerja Pemerintah Gampong Punge Jurong guna pemberdayaan dan peningkatan kesejahteraan Gampong dalam Kota Banda Aceh.</p>
            </div>
          </div>
        </div>
      </div>
  </div>
  <footer class="footer has-cards">
    <div class="container container-lg">
      <div class="row">
        <div class="col-lg-4">
            <div class="card card-lift--hover shadow border-0 mb-4">
          <!--  <a href="{{ route('login') }}" title="Landing Page"> -->
                  <img class="card-img-top" src="assets/img/theme/landing.jpg" alt="Card image cap" style="max-height:280px;">
                      <div class="card-body py-4">
                          <h6 class="text-primary text-uppercase">Surat Keterangan Domisili Sekretariat</h6>
                          <p class="description mb-1">Surat yang menyatakan domisili sekretariat, organisasi masyarakat dan partai politik.</p>
                          <a class="btn btn-primary mt-1" href="{{ route('login') }}">Laporkan sekarang</a>
                      </div>
              </a>
        </div>
    </div>
    <div class="col-lg-4">
          <div class="card card-lift--hover shadow border-0 mb-4">
          <!-- <a href="{{ route('login') }}" title="Profile Page"> -->
                  <img class="card-img-top" src="assets/img/theme/profile.jpg" class="card-img" alt="Card image cap" style="max-height:280px;">
                      <div class="card-body py-4">
                          <h6 class="text-primary text-uppercase">Surat keterangan Usaha</h6>
                          <p class="description mb-1">Surat Keterangan Usaha (SKU) adalah surat yang menjelaskan secara resmi…</p>
                          <a class="btn btn-primary mt-1" href="{{ route('login') }}">Laporkan sekarang</a>
                    </div>
              </a>
          </div>
      </div>
      <div class="col-lg-4">
            <div class="card card-lift--hover shadow border-0 mb-4">
          <!--  <a href="{{ route('login') }}" title="Profile Page"> -->
                    <img class="card-img-top" src="assets/img/theme/profile.jpg" class="card-img" alt="Card image cap" style="max-height:280px;">
                        <div class="card-body py-4">
                            <h6 class="text-primary text-uppercase">Surat Keterangan Domisili Usaha</h6>
                            <p class="description mb-1">Surat yang menyatakan domisili seseorang atau suatu badan usaha/perusahaan.</p>
                            <a class="btn btn-primary mt-1" href="{{ route('login') }}">Laporkan sekarang</a>
                        </div>
                </a>
            </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row row-grid align-items-center my-md">
        <div class="col-lg-6">
          <h3 class="text-primary font-weight-light mb-2">Terima kasih telah mendukung kami!</h3>
          <h4 class="mb-0 font-weight-light">Hubungi kami pada salah satu platform ini.</h4>
        </div>
        <div class="col-lg-6 text-lg-center btn-wrapper">
          <button target="_blank" href="https://twitter.com/creativetim" rel="nofollow" class="btn btn-icon-only btn-twitter rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
            <span class="btn-inner--icon"><i class="fa fa-twitter"></i></span>
          </button>
          <button target="_blank" href="https://www.facebook.com/CreativeTim/" rel="nofollow" class="btn-icon-only rounded-circle btn btn-facebook" data-toggle="tooltip" data-original-title="Like us">
            <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
          </button>
          <button target="_blank" href="https://dribbble.com/creativetim" rel="nofollow" class="btn btn-icon-only btn-dribbble rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
            <span class="btn-inner--icon"><i class="fa fa-dribbble"></i></span>
          </button>
          <button target="_blank" href="https://github.com/creativetimofficial" rel="nofollow" class="btn btn-icon-only btn-github rounded-circle" data-toggle="tooltip" data-original-title="Star on Github">
            <span class="btn-inner--icon"><i class="fa fa-github"></i></span>
          </button>
        </div>
      </div>
      <hr>
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          <div class="copyright">
            &copy; 2020 <a href="" target="_blank">Creative Tim</a>.
          </div>
        </div>
        <div class="col-md-6">
          <ul class="nav nav-footer justify-content-end">
            <li class="nav-item">
              <a href="" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link" target="_blank">License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <script src="./assets/js/plugins/datetimepicker.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/bootstrap-datepicker.min.js"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="./assets/js/argon-design-system.min.js?v=1.2.0" type="text/javascript"></script>
  <script>
    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
  </script>
</body>

</html>
  <!-- Header Section Start -->
  <header id="home" class="hero-area">
    <div class="overlay">
      <span></span>
      <span></span>
    </div>
    <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
      <div class="container">
        <a href="index.html" class="navbar-brand"><img src="{{ asset('img/logo7.png')}}" height="65" width="200" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <i class="lni-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto w-100 justify-content-end">
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#alur">Alur</a>
              </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="{{ url('login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-singin" href="{{ url('register')}}">Registrasi</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row space-100">
        <div class="col-lg-6 col-md-12 col-xs-12">
          <div class="contents">
            <h2 class="head-title">Layanan Online Pengaduan Sampah Masyarakat</h2>
            <p>Sampaikan laporan masalah Anda di sini, kami akan memprosesnya dengan cepat, aman dan nyaman.</p>
            <div class="header-button">
              <a href="{{ url('login')}}" rel="nofollow" target="_blank" class="btn btn-border-filled">Laporkan!</a>
              <a href="#service" rel="nofollow" target="_blank" class="btn btn-border page-scroll">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-xs-12 p-0">
          <div class="intro-img">
            <img src="img/truk.png" height="700" width="700">
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Header Section End -->


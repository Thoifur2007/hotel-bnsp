<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Serenity - Pengalaman Menginap Terbaik</title>
  
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }
    
    body {
      background-color: #f8f9fa;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    
    /* Navbar */
    .navbar {
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      background: white !important;
    }
    
    .navbar-brand {
      font-weight: 700;
      font-size: 1.5rem;
      background: linear-gradient(135deg, #e63946 0%, #d00000 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    
    .nav-link {
      font-weight: 500;
      color: #495057 !important;
      transition: all 0.3s;
      position: relative;
      padding: 0.5rem 1rem !important;
    }
    
    .nav-link:hover {
      color: #e63946 !important;
      transform: translateY(-2px);
    }
    
    .nav-link.active {
      color: #e63946 !important;
      font-weight: 600;
    }
    
    .nav-link.active::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 30px;
      height: 3px;
      background: linear-gradient(135deg, #e63946 0%, #d00000 100%);
      border-radius: 10px;
    }
    
    /* Main */
    main {
      flex: 1;
      padding-top: 2rem;
      padding-bottom: 2rem;
    }
    
    /* Footer */
    .footer {
      background: linear-gradient(135deg, #e63946 0%, #d00000 100%);
      color: white;
      padding: 3rem 0 1rem;
      margin-top: auto;
    }
    
    .footer a {
      color: white;
      text-decoration: none;
      transition: opacity 0.3s;
    }
    
    .footer a:hover {
      opacity: 0.8;
    }
    
    /* Buttons */
    .btn-primary {
      background: linear-gradient(135deg, #e63946 0%, #d00000 100%);
      border: none;
      transition: all 0.3s;
    }
    
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(230, 57, 70, 0.4);
    }

    /* Scroll top */
    #scrollToTop {
      position: fixed;
      bottom: 30px;
      right: 30px;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: linear-gradient(135deg, #e63946 0%, #d00000 100%);
      color: white;
      border: none;
      font-size: 1.5rem;
      display: none;
      z-index: 1000;
      cursor: pointer;
      transition: all 0.3s;
      box-shadow: 0 4px 15px rgba(230, 57, 70, 0.4);
    }
    
    #scrollToTop:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 20px rgba(230, 57, 70, 0.6);
    }

    /* Loader */
    .page-loader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: white;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      transition: opacity 0.5s, visibility 0.5s;
    }
    
    .page-loader.hidden {
      opacity: 0;
      visibility: hidden;
    }
    
    .loader-spinner {
      width: 50px;
      height: 50px;
      border: 5px solid #f3f3f3;
      border-top: 5px solid #e63946;
      border-radius: 50%;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
  </style>
</head>
<body>

  <!-- Page Loader -->
  <div class="page-loader" id="pageLoader">
    <div class="loader-spinner"></div>
  </div>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
      <a class="navbar-brand" href="{{ route('dashboard') }}">
        Hotel Serenity
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
              <i class="bi bi-house-door me-1"></i>Dashboard
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('galeri') ? 'active' : '' }}" href="{{ route('galeri') }}">
              <i class="bi bi-images me-1"></i>Galeri
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('tentang') ? 'active' : '' }}" href="{{ route('tentang') }}">
              <i class="bi bi-info-circle me-1"></i>Tentang
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('pemesanan.list') ? 'active' : '' }}" href="{{ route('pemesanan.list') }}">
              <i class="bi bi-list-ul me-1"></i>Daftar Pemesanan
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <main>
    <div class="container">
      @yield('content')
    </div>
  </main>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row g-4">

        <div class="col-lg-4 col-md-6">
          <h5 class="fw-bold mb-3">Hotel Serenity</h5>
          <p class="mb-3">Pengalaman menginap terbaik dengan pelayanan istimewa & fasilitas premium.</p>
          <div class="d-flex gap-3">
            <a href="#" class="btn btn-light btn-sm rounded-circle">
              <i class="bi bi-facebook"></i>
            </a>
            <a href="#" class="btn btn-light btn-sm rounded-circle">
              <i class="bi bi-instagram"></i>
            </a>
            <a href="#" class="btn btn-light btn-sm rounded-circle">
              <i class="bi bi-twitter"></i>
            </a>
            <a href="#" class="btn btn-light btn-sm rounded-circle">
              <i class="bi bi-youtube"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-2 col-md-6">
          <h5 class="fw-bold mb-3">Menu</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="mb-2"><a href="{{ route('galeri') }}">Galeri</a></li>
            <li class="mb-2"><a href="{{ route('tentang') }}">Tentang</a></li>
            <li class="mb-2"><a href="{{ route('pemesanan.list') }}">Daftar Pemesanan</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6">
          <h5 class="fw-bold mb-3">Kontak</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><i class="bi bi-geo-alt me-2"></i>Jl. Raya Bogor No. 123</li>
            <li class="mb-2"><i class="bi bi-telephone me-2"></i>(0251) 123-4567</li>
            <li class="mb-2"><i class="bi bi-whatsapp me-2"></i>+62 812-3456-7890</li>
            <li class="mb-2"><i class="bi bi-envelope me-2"></i>info@hotelserenity.com</li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6">
          <h5 class="fw-bold mb-3">Jam Operasional</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><i class="bi bi-clock me-2"></i>Front Desk: 24 Jam</li>
            <li class="mb-2"><i class="bi bi-door-open me-2"></i>Check-in: 14:00</li>
            <li class="mb-2"><i class="bi bi-door-closed me-2"></i>Check-out: 12:00</li>
            <li class="mb-2"><i class="bi bi-cup-hot me-2"></i>Breakfast: 06:00 - 10:00</li>
          </ul>
        </div>

      </div>

      <hr class="my-4" style="border-color: rgba(255,255,255,0.3);">

      <div class="row">
        <div class="col-md-6 text-center text-md-start">
          <p class="mb-0">&copy; {{ date('Y') }} Hotel Serenity. All rights reserved.</p>
        </div>
        <div class="col-md-6 text-center text-md-end">
          <p class="mb-0">Made with <i class="bi bi-heart-fill text-light"></i> in Bogor</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <button id="scrollToTop">
    <i class="bi bi-arrow-up"></i>
  </button>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Loader
    window.addEventListener('load', function() {
      document.getElementById('pageLoader').classList.add('hidden');
    });

    // Scroll top
    const scrollToTopBtn = document.getElementById('scrollToTop');
    
    window.addEventListener('scroll', function() {
      scrollToTopBtn.style.display = window.pageYOffset > 300 ? 'block' : 'none';
    });
    
    scrollToTopBtn.addEventListener('click', function() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  </script>

  @stack('scripts')
</body>
</html>

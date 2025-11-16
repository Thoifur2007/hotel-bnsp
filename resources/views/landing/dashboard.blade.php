@extends('layouts.app')

@section('content')
<div class="hero-section text-center py-5 mb-5" 
     style="background: linear-gradient(135deg, #e63946 0%, #d00000 100%); border-radius: 15px; color: white;">
  <div class="container">
    <h1 class="display-4 fw-bold mb-3">Selamat Datang di Hotel Serenity</h1>
    <p class="lead fs-4 mb-4">Nikmati pengalaman menginap terbaik dengan pelayanan istimewa dan fasilitas bintang lima</p>
    <a href="{{ route('pemesanan') }}" 
       class="btn btn-light btn-lg px-5 py-3 shadow-lg" 
       style="border-radius: 50px; font-weight: 600;">
      Pesan Sekarang
    </a>
  </div>
</div>

<div class="container my-5">
  <h2 class="text-center mb-5 fw-bold" style="color: #d00000;">Fasilitas Unggulan Kami</h2>

  <div class="row g-4 text-center">

    <!-- Kolam Renang -->
    <div class="col-md-4">
      <div class="card h-100 border-0 shadow-sm"
           style="transition: transform 0.3s; border-radius: 15px;"
           onmouseover="this.style.transform='translateY(-10px)'"
           onmouseout="this.style.transform='translateY(0)'">
        <div class="card-body p-4">
          <div class="mb-3 fs-1 text-danger"><i class="bi bi-water"></i></div>
          <h5 class="card-title fw-bold mb-3">Kolam Renang</h5>
          <p class="card-text text-muted">
            Kolam renang infinity dengan pemandangan kota yang menakjubkan, buka 24 jam
          </p>
        </div>
      </div>
    </div>

    <!-- Restoran Premium -->
    <div class="col-md-4">
      <div class="card h-100 border-0 shadow-sm"
           style="transition: transform 0.3s; border-radius: 15px;"
           onmouseover="this.style.transform='translateY(-10px)'"
           onmouseout="this.style.transform='translateY(0)'">
        <div class="card-body p-4">
          <div class="mb-3 fs-1 text-danger"><i class="bi bi-cup-hot"></i></div>
          <h5 class="card-title fw-bold mb-3">Restoran Premium</h5>
          <p class="card-text text-muted">
            Nikmati hidangan nusantara dan internasional dari chef berpengalaman
          </p>
        </div>
      </div>
    </div>

    <!-- Spa & Wellness -->
    <div class="col-md-4">
      <div class="card h-100 border-0 shadow-sm"
           style="transition: transform 0.3s; border-radius: 15px;"
           onmouseover="this.style.transform='translateY(-10px)'"
           onmouseout="this.style.transform='translateY(0)'">
        <div class="card-body p-4">
          <div class="mb-3 fs-1 text-danger"><i class="bi bi-heart-pulse"></i></div>
          <h5 class="card-title fw-bold mb-3">Spa & Wellness</h5>
          <p class="card-text text-muted">
            Relaksasi maksimal dengan treatment spa dan massage terbaik
          </p>
        </div>
      </div>
    </div>

    <!-- Fitness Center -->
    <div class="col-md-4">
      <div class="card h-100 border-0 shadow-sm"
           style="transition: transform 0.3s; border-radius: 15px;"
           onmouseover="this.style.transform='translateY(-10px)'"
           onmouseout="this.style.transform='translateY(0)'">
        <div class="card-body p-4">
          <div class="mb-3 fs-1 text-danger">
            <i class="bi bi-universal-access-circle"></i>
          </div>
          <h5 class="card-title fw-bold mb-3">Fitness Center</h5>
          <p class="card-text text-muted">
            Gym modern dengan peralatan lengkap dan instruktur profesional
          </p>
        </div>
      </div>
    </div>

    <!-- Parkir Gratis -->
    <div class="col-md-4">
      <div class="card h-100 border-0 shadow-sm"
           style="transition: transform 0.3s; border-radius: 15px;"
           onmouseover="this.style.transform='translateY(-10px)'"
           onmouseout="this.style.transform='translateY(0)'">
        <div class="card-body p-4">
          <div class="mb-3 fs-1 text-danger"><i class="bi bi-p-square"></i></div>
          <h5 class="card-title fw-bold mb-3">Parkir Gratis</h5>
          <p class="card-text text-muted">
            Area parkir luas dan aman untuk kendaraan Anda
          </p>
        </div>
      </div>
    </div>

    <!-- WiFi Gratis -->
    <div class="col-md-4">
      <div class="card h-100 border-0 shadow-sm"
           style="transition: transform 0.3s; border-radius: 15px;"
           onmouseover="this.style.transform='translateY(-10px)'"
           onmouseout="this.style.transform='translateY(0)'">
        <div class="card-body p-4">
          <div class="mb-3 fs-1 text-danger"><i class="bi bi-wifi"></i></div>
          <h5 class="card-title fw-bold mb-3">WiFi Gratis</h5>
          <p class="card-text text-muted">
            Koneksi internet cepat di seluruh area hotel
          </p>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="container my-5">
  <div class="row align-items-center">
    <div class="col-md-6">
      <h3 class="fw-bold mb-4" style="color: #d00000;">Mengapa Memilih Hotel Serenity?</h3>
      <ul class="list-unstyled">
        <li class="mb-3"><i class="bi bi-check-circle-fill text-danger me-2"></i> Lokasi strategis di pusat kota</li>
        <li class="mb-3"><i class="bi bi-check-circle-fill text-danger me-2"></i> Kamar bersih dan nyaman</li>
        <li class="mb-3"><i class="bi bi-check-circle-fill text-danger me-2"></i> Pelayanan ramah 24/7</li>
        <li class="mb-3"><i class="bi bi-check-circle-fill text-danger me-2"></i> Harga terjangkau dengan kualitas premium</li>
        <li class="mb-3"><i class="bi bi-check-circle-fill text-danger me-2"></i> Diskon khusus untuk menginap lebih dari 3 hari</li>
      </ul>
    </div>

    <div class="col-md-6">
      <div class="card border-0 shadow-lg" 
           style="border-radius: 15px; background: linear-gradient(135deg, #ff6b6b 0%, #e63946 100%); color: white;">
        <div class="card-body p-5 text-center">
          <h4 class="fw-bold mb-3">Promo Special!</h4>
          <p class="fs-5 mb-4">Dapatkan diskon 10% untuk pemesanan di atas 3 malam</p>
          <a href="{{ route('pemesanan') }}" 
             class="btn btn-light btn-lg px-4" 
             style="border-radius: 50px; font-weight: 600;">
            Booking Sekarang
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

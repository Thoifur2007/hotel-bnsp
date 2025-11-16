@extends('layouts.app')

@section('content')
<div class="container py-5">
  <!-- Header Section -->
  <div class="text-center mb-5">
    <h2 class="display-4 fw-bold" style="color: #e63946;">
      Tentang Hotel Serenity
    </h2>
    <p class="lead text-muted">Pengalaman Menginap Terbaik Sejak 2010</p>
  </div>

  <!-- Hero Image Section -->
  <div class="card border-0 shadow-lg mb-5" style="border-radius: 20px; overflow: hidden;">
    <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?w=1200&h=400&fit=crop" class="card-img-top" style="height: 400px; object-fit: cover;">
    <div class="card-img-overlay d-flex align-items-center justify-content-center" style="background: rgba(208, 14, 14, 0.552);">
      <div class="text-center text-white">
        <h1 class="display-3 fw-bold mb-3">Hotel Serenity</h1>
        <p class="fs-4">Where Comfort Meets Luxury</p>
      </div>
    </div>
  </div>

  <!-- About Story -->
  <div class="row mb-5 align-items-center">
    <div class="col-lg-6 mb-4 mb-lg-0">
      <div class="card border-0 shadow-sm" style="border-radius: 20px; overflow: hidden;">
        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=600&h=400&fit=crop" class="card-img" style="height: 400px; object-fit: cover;">
      </div>
    </div>

    <div class="col-lg-6">
      <h3 class="fw-bold mb-4" style="color: #e63946;">Kisah Kami</h3>
      <p class="text-muted mb-3" style="text-align: justify; line-height: 1.8;">
        Hotel Serenity berdiri sejak tahun 2010 dengan visi untuk menyediakan pengalaman menginap terbaik di kelasnya. Berlokasi strategis di pusat kota, kami menawarkan kombinasi sempurna antara kenyamanan modern dan pelayanan tradisional yang hangat.
      </p>
      <p class="text-muted mb-3" style="text-align: justify; line-height: 1.8;">
        Dengan pengalaman lebih dari 14 tahun dalam industri perhotelan, kami telah melayani ribuan tamu dari berbagai belahan dunia. Setiap tamu adalah prioritas kami, dan kepuasan mereka adalah kesuksesan kami.
      </p>
      <p class="text-muted mb-4" style="text-align: justify; line-height: 1.8;">
        Hotel Serenity dikenal dengan kenyamanan kamar, fasilitas lengkap, dan pelayanan prima yang membuat setiap tamu merasa seperti di rumah sendiri.
      </p>

      <div class="d-flex gap-3">
        <div class="text-center">
          <div class="fw-bold" style="font-size: 2rem; color: #e63946;">14+</div>
          <small class="text-muted">Tahun Berpengalaman</small>
        </div>
        <div class="text-center">
          <div class="fw-bold" style="font-size: 2rem; color: #e63946;">50K+</div>
          <small class="text-muted">Tamu Puas</small>
        </div>
        <div class="text-center">
          <div class="fw-bold" style="font-size: 2rem; color: #e63946;">150+</div>
          <small class="text-muted">Kamar Tersedia</small>
        </div>
      </div>
    </div>
  </div>

  <!-- Visi Misi -->
  <div class="row g-4 mb-5">
    <div class="col-md-6">
      <div class="card border-0 shadow-lg h-100" style="border-radius: 20px;">
        <div class="card-body p-5">
          <div class="text-center mb-4">
            <div style="width: 80px; height: 80px; margin: 0 auto; border-radius: 50%; background: linear-gradient(135deg, #f64c98 0%, #e63946 100%); display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
              Visi
            </div>
          </div>
          <h4 class="text-center fw-bold mb-4" style="color: #e63946;">Visi Kami</h4>
          <p class="text-muted text-center" style="line-height: 1.8;">
            Menjadi hotel pilihan utama yang memberikan pengalaman menginap terbaik dengan standar pelayanan internasional dan sentuhan keramahan Indonesia.
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card border-0 shadow-lg h-100" style="border-radius: 20px;">
        <div class="card-body p-5">
          <div class="text-center mb-4">
            <div style="width: 80px; height: 80px; margin: 0 auto; border-radius: 50%; background: linear-gradient(135deg, #f64c98 0%, #e63946 100%); display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
              Misi
            </div>
          </div>
          <h4 class="text-center fw-bold mb-4" style="color: #e63946;">Misi Kami</h4>
          <ul class="list-unstyled text-muted">
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Memberikan pelayanan terbaik kepada setiap tamu</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Menjaga kebersihan dan kenyamanan kamar</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Menyediakan fasilitas modern dan lengkap</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Menciptakan pengalaman menginap yang berkesan</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Tipe Kamar -->
  <div class="mb-5">
    <h3 class="text-center fw-bold mb-4" style="color: #e63946;">Tipe Kamar Kami</h3>
    <div class="row g-4">

      <!-- Standar Room -->
      <div class="col-md-4">
        <div class="card border-0 shadow-lg h-100" style="border-radius: 20px; overflow: hidden; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
          <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=400&h=250&fit=crop" class="card-img-top" style="height: 200px; object-fit: cover;">
          <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="fw-bold mb-0">Standar Room</h5>
              <span class="badge bg-success">Std</span>
            </div>
            <p class="text-muted mb-3">Kamar nyaman dengan fasilitas standar untuk menginap yang menyenangkan</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="text-muted">Mulai dari</span>
              <div class="fw-bold" style="color: #e63946; font-size: 1.3rem;">Rp 500.000</div>
            </div>
            <small class="text-muted">per malam</small>
          </div>
        </div>
      </div>

      <!-- Deluxe Room -->
      <div class="col-md-4">
        <div class="card border-0 shadow-lg h-100" style="border-radius: 20px; overflow: hidden; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
          <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?w=400&h=250&fit=crop" class="card-img-top" style="height: 200px; object-fit: cover;">
          <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="fw-bold mb-0">Deluxe Room</h5>
              <span class="badge bg-warning">DLX</span>
            </div>
            <p class="text-muted mb-3">Kamar premium dengan view kota dan fasilitas lebih lengkap</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="text-muted">Mulai dari</span>
              <div class="fw-bold" style="color: #e63946; font-size: 1.3rem;">Rp 750.000</div>
            </div>
            <small class="text-muted">per malam</small>
          </div>
        </div>
      </div>

      <!-- Family Room -->
      <div class="col-md-4">
        <div class="card border-0 shadow-lg h-100" style="border-radius: 20px; overflow: hidden; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
          <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=400&h=250&fit=crop" class="card-img-top" style="height: 200px; object-fit: cover;">
          <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="fw-bold mb-0">Family Room</h5>
              <span class="badge bg-info">FM</span>
            </div>
            <p class="text-muted mb-3">Kamar luas dengan 2 tempat tidur dan ruang tamu</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="text-muted">Mulai dari</span>
              <div class="fw-bold" style="color: #e63946; font-size: 1.3rem;">Rp 1.000.000</div>
            </div>
            <small class="text-muted">per malam</small>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Nilai-nilai Kami -->
  <div class="card border-0 shadow-lg mb-5" style="border-radius: 20px; background-color:#e63946; color: white;">
    <div class="card-body p-5">
      <h3 class="text-center fw-bold mb-5">Nilai-Nilai Kami</h3>
      <div class="row g-4 text-center">
        <div class="col-md-3">
          <h5 class="fw-bold mb-2">Integritas</h5>
          <p class="mb-0">Berkomitmen pada kejujuran dan transparansi</p>
        </div>
        <div class="col-md-3">
          <h5 class="fw-bold mb-2">Kualitas</h5>
          <p class="mb-0">Memberikan pelayanan terbaik setiap saat</p>
        </div>
        <div class="col-md-3">
          <h5 class="fw-bold mb-2">Keramahan</h5>
          <p class="mb-0">Menyambut setiap tamu dengan hangat</p>
        </div>
        <div class="col-md-3">
          <h5 class="fw-bold mb-2">Inovasi</h5>
          <p class="mb-0">Terus berkembang dan berinovasi</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact Info -->
  <div class="row g-4 mb-5">
    <div class="col-md-4">
      <div class="card border-0 shadow-sm text-center h-100" style="border-radius: 15px;">
        <div class="card-body p-4">
          <h5 class="fw-bold mb-3">Lokasi</h5>
          <p class="text-muted">Jl. Raya Bogor No. 123<br>Bogor, Jawa Barat<br>Indonesia 16610</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card border-0 shadow-sm text-center h-100" style="border-radius: 15px;">
        <div class="card-body p-4">
          <h5 class="fw-bold mb-3">Kontak</h5>
          <p class="text-muted">
            Telepon: (0251) 123-4567<br>
            WhatsApp: +62 812-3456-7890<br>
            Email: info@hotelserenity.com
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card border-0 shadow-sm text-center h-100" style="border-radius: 15px;">
        <div class="card-body p-4">
          <h5 class="fw-bold mb-3">Jam Operasional</h5>
          <p class="text-muted">
            Check-in: 14:00<br>
            Check-out: 12:00<br>
            Front Desk: 24 Jam
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- CTA -->
  <div class="text-center">
    <h4 class="fw-bold mb-4" style="color: #e63946;">Siap Merasakan Pengalaman Menginap Terbaik?</h4>

    <a href="{{ route('pemesanan') }}" class="btn btn-primary btn-lg px-5 me-3" style="border-radius: 50px; background-color:#e63946; border: none; font-weight: 600;">
      <i class="bi bi-calendar-check me-2"></i>Pesan Sekarang
    </a>

    <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary btn-lg px-5" style="border-radius: 50px;">
      <i class="bi bi-house me-2"></i>Kembali ke Dashboard
    </a>
  </div>

</div>
@endsection

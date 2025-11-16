@extends('layouts.app')

@section('content')
<div class="container py-5">
  <div class="text-center mb-5">
    <h2 class="display-4 fw-bold" style="color: #e63946;">
      Galeri Hotel Serenity
    </h2>
    <p class="lead text-muted">Jelajahi keindahan dan kenyamanan fasilitas hotel kami</p>
  </div>

  <!-- Main Gallery Grid -->
  <div class="row g-4 mb-5">

    <!-- Kamar Hotel -->
    <div class="col-md-4">
      <div class="card border-0 shadow-lg h-100" 
        style="border-radius: 20px; overflow: hidden; transition: .3s;">
        <div style="position: relative; overflow: hidden; height: 300px;">
          <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?w=500&h=300&fit=crop" 
            class="w-100 h-100" style="object-fit: cover; transition: .3s;">
        </div>
        <div class="card-body p-4">
          <h5 class="card-title fw-bold mb-2">Kamar Deluxe</h5>
          <p class="card-text text-muted">Kamar nyaman dengan tempat tidur king size dan pemandangan kota yang menakjubkan</p>
        </div>
      </div>
    </div>

    <!-- Resort Area -->
    <div class="col-md-4">
      <div class="card border-0 shadow-lg h-100"
        style="border-radius: 20px; overflow: hidden; transition: .3s;">
        <div style="position: relative; overflow: hidden; height: 300px;">
          <img src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?w=500&h=300&fit=crop"
            class="w-100 h-100" style="object-fit: cover; transition: .3s;">
        </div>
        <div class="card-body p-4">
          <h5 class="card-title fw-bold mb-2">Area Resort</h5>
          <p class="card-text text-muted">Suasana tropis dengan taman yang asri dan udara segar pegunungan</p>
        </div>
      </div>
    </div>

    <!-- Kolam Renang -->
    <div class="col-md-4">
      <div class="card border-0 shadow-lg h-100"
        style="border-radius: 20px; overflow: hidden; transition: .3s;">
        <div style="position: relative; overflow: hidden; height: 300px;">
          <img src="https://images.unsplash.com/photo-1575429198097-0414ec08e8cd?w=500&h=300&fit=crop"
            class="w-100 h-100" style="object-fit: cover; transition: .3s;">
        </div>
        <div class="card-body p-4">
          <h5 class="card-title fw-bold mb-2">Kolam Renang Infinity</h5>
          <p class="card-text text-muted">Kolam renang infinity dengan pemandangan 360 derajat yang memukau</p>
        </div>
      </div>
    </div>

    <!-- Restoran -->
    <div class="col-md-4">
      <div class="card border-0 shadow-lg h-100"
        style="border-radius: 20px; overflow: hidden; transition: .3s;">
        <div style="position: relative; overflow: hidden; height: 300px;">
          <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=500&h=300&fit=crop"
            class="w-100 h-100" style="object-fit: cover; transition: .3s;">
        </div>
        <div class="card-body p-4">
          <h5 class="card-title fw-bold mb-2">Restoran Premium</h5>
          <p class="card-text text-muted">Nikmati berbagai menu internasional dan nusantara dari chef terbaik</p>
        </div>
      </div>
    </div>

    <!-- Lobby -->
    <div class="col-md-4">
      <div class="card border-0 shadow-lg h-100"
        style="border-radius: 20px; overflow: hidden; transition: .3s;">
        <div style="position: relative; overflow: hidden; height: 300px;">
          <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=500&h=300&fit=crop"
            class="w-100 h-100" style="object-fit: cover; transition: .3s;">
        </div>
        <div class="card-body p-4">
          <h5 class="card-title fw-bold mb-2">Lobby Mewah</h5>
          <p class="card-text text-muted">Lobby hotel dengan desain modern dan pelayanan concierge 24 jam</p>
        </div>
      </div>
    </div>

    <!-- Spa -->
    <div class="col-md-4">
      <div class="card border-0 shadow-lg h-100"
        style="border-radius: 20px; overflow: hidden; transition: .3s;">
        <div style="position: relative; overflow: hidden; height: 300px;">
          <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?w=500&h=300&fit=crop"
            class="w-100 h-100" style="object-fit: cover; transition: .3s;">
        </div>
        <div class="card-body p-4">
          <h5 class="card-title fw-bold mb-2">Spa & Wellness</h5>
          <p class="card-text text-muted">Relaksasi total dengan treatment spa profesional dan terapis berpengalaman</p>
        </div>
      </div>
    </div>

  </div>

  <!-- Video Tour Section -->
  <div class="card border-0 shadow-lg mb-5" 
    style="border-radius: 20px; background: linear-gradient(135deg, #e63946 0%, #b30000 100%); color: white;">
    <div class="card-body p-5 text-center">
      <h3 class="fw-bold mb-3">Virtual Tour</h3>
      <p class="mb-4">Jelajahi seluruh fasilitas hotel kami melalui virtual tour 360°</p>
      <button class="btn btn-light btn-lg px-5" style="border-radius: 50px; font-weight: 600;">
        Mulai Virtual Tour
      </button>
    </div>
  </div>

  <!-- Testimonial Section -->
  <div class="mb-5">
    <h3 class="text-center fw-bold mb-4" style="color: #e63946;">Apa Kata Tamu Kami</h3>
    <div class="row g-4">

      <!-- Testimonial 1 -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100" style="border-radius: 15px;">
          <div class="card-body p-4">
            <div class="d-flex mb-3">
              <span class="text-warning">⭐⭐⭐⭐⭐</span>
            </div>
            <p class="card-text mb-3">"Pengalaman menginap yang luar biasa! Kamar sangat bersih dan pelayanan ramah."</p>
            <div class="d-flex align-items-center">
              <div class="avatar me-3" 
                style="width: 50px; height: 50px; border-radius: 50%; background: #e63946; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 1.2rem;">
                B
              </div>
              <div>
                <div class="fw-bold">Budi Santoso</div>
                <small class="text-muted">Jakarta</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100" style="border-radius: 15px;">
          <div class="card-body p-4">
            <div class="d-flex mb-3">
              <span class="text-warning">⭐⭐⭐⭐⭐</span>
            </div>
            <p class="card-text mb-3">"Kolam renangnya amazing! View dari kamar juga sangat bagus."</p>
            <div class="d-flex align-items-center">
              <div class="avatar me-3" 
                style="width: 50px; height: 50px; border-radius: 50%; background: #b30000; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 1.2rem;">
                S
              </div>
              <div>
                <div class="fw-bold">Siti Nurhaliza</div>
                <small class="text-muted">Bandung</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100" style="border-radius: 15px;">
          <div class="card-body p-4">
            <div class="d-flex mb-3">
              <span class="text-warning">⭐⭐⭐⭐⭐</span>
            </div>
            <p class="card-text mb-3">"Spa-nya top! Breakfast buffet juga variatif dan enak."</p>
            <div class="d-flex align-items-center">
              <div class="avatar me-3" 
                style="width: 50px; height: 50px; border-radius: 50%; background: #ff6b6b; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 1.2rem;">
                A
              </div>
              <div>
                <div class="fw-bold">Ahmad Dhani</div>
                <small class="text-muted">Surabaya</small>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- CTA Section -->
  <div class="text-center">
    <a href="{{ route('pemesanan') }}" class="btn btn-primary btn-lg px-5 me-3"
      style="border-radius: 50px; background: #e63946; border: none; font-weight: 600;">
      Pesan Sekarang
    </a>
    <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary btn-lg px-5" style="border-radius: 50px;">
      Kembali ke Dashboard
    </a>
  </div>
</div>

<style>
@media (max-width: 768px) {
  .display-4 {
    font-size: 2rem;
  }
}
</style>
@endsection

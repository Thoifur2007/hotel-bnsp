<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Serenity</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">🏨 Hotel Serenity</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
  <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
  <li class="nav-item"><a class="nav-link" href="{{ route('tentang') }}">Tentang Kami</a></li>
  <li class="nav-item"><a class="nav-link" href="{{ route('galeri') }}">Galeri</a></li>
  <li class="nav-item"><a class="nav-link" href="{{ route('pemesanan.list') }}">Daftar Pemesanan</a></li>
</ul>

    </div>
  </div>
</nav>

<div class="container mt-5">
  @yield('content')
</div>

<footer class="bg-dark text-white text-center py-3 mt-5">
  <small>© 2025 Hotel Serenity. All rights reserved.</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

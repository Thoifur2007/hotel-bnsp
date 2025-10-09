@extends('layouts.app')

@section('content')
<h2 class="mb-4">Form Pemesanan Hotel</h2>

@if (session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if ($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('pemesanan.store') }}" method="POST" class="row g-3">
  @csrf

  <div class="col-md-6">
    <label class="form-label">Nama Pemesan</label>
    <input type="text" name="nama_pemesan" class="form-control" required>
  </div>

  <div class="col-md-6">
    <label class="form-label">Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-select" required>
      <option value="">-- Pilih --</option>
      <option value="Laki-laki">Laki-laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
  </div>

  <div class="col-md-6">
    <label class="form-label">Nomor Identitas (16 Digit)</label>
    <input type="text" name="nomor_identitas" class="form-control" required>
  </div>

  <div class="col-md-6">
    <label class="form-label">Tipe Kamar</label>
    <select name="tipe_kamar" id="tipe_kamar" class="form-select" required>
      <option value="">-- Pilih --</option>
      <option value="Standar">Standar</option>
      <option value="Deluxe">Deluxe</option>
      <option value="Family">Family</option>
    </select>
  </div>

  <div class="col-md-6">
    <label class="form-label">Harga (per malam)</label>
    <input type="text" name="harga" id="harga" class="form-control" readonly>
  </div>

  <div class="col-md-6">
    <label class="form-label">Tanggal Pesan (dd/mm/yyyy)</label>
    <input type="text" name="tanggal_pesan" class="form-control" placeholder="contoh: 09/10/2025" required>
  </div>

  <div class="col-md-6">
    <label class="form-label">Durasi Menginap (hari)</label>
    <input type="text" name="durasi_menginap" id="durasi_menginap" class="form-control" required>
  </div>

  <div class="col-md-6">
    <div class="form-check mt-4">
      <input class="form-check-input" type="checkbox" name="termasuk_breakfast" id="breakfast">
      <label class="form-check-label" for="breakfast">
        Termasuk Breakfast (Ya)
      </label>
    </div>
  </div>

  <div class="col-md-6">
    <label class="form-label">Total Bayar</label>
    <input type="text" name="total_bayar" id="total_bayar" class="form-control" readonly>
  </div>

  <div class="col-md-6 text-end">
    <button type="button" id="btnHitung" class="btn btn-primary">Hitung Total Bayar</button>
    <button type="submit" class="btn btn-success">Simpan Pemesanan</button>
  </div>
</form>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const tipeKamar = document.getElementById('tipe_kamar');
  const hargaField = document.getElementById('harga');
  const durasi = document.getElementById('durasi_menginap');
  const breakfast = document.getElementById('breakfast');
  const total = document.getElementById('total_bayar');

  const hargaMap = {
    'Standar': 500000,
    'Deluxe': 750000,
    'Family': 1000000
  };

  tipeKamar.addEventListener('change', () => {
    hargaField.value = hargaMap[tipeKamar.value] ?? '';
  });

  document.getElementById('btnHitung').addEventListener('click', () => {
    const h = parseInt(hargaField.value || 0);
    const d = parseInt(durasi.value || 0);
    if (isNaN(d)) {
      alert("Durasi menginap harus isi angka");
      return;
    }
    let totalBayar = h * d;
    if (d > 3) totalBayar *= 0.9; // Diskon 10%
    if (breakfast.checked) totalBayar += 80000;
    total.value = totalBayar.toLocaleString('id-ID');
  });
});
</script>
@endsection

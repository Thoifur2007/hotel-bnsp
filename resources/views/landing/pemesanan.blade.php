@extends('layouts.app')

@section('content')

<style>
    .card-premium {
        background: #1a1a1a;
        border: 1px solid #400000;
        box-shadow: 0 0 10px rgba(150, 0, 0, 0.4);
        border-radius: 10px;
        padding: 25px;
    }

    .premium-label {
        color: #e63946;
        font-weight: 600;
    }

    .form-control,
    select {
        background-color: #2a2a2a !important;
        border: 1px solid #550000 !important;
        color: #fff !important;
    }

    .form-control:focus,
    select:focus {
        border-color: #d00000 !important;
        box-shadow: 0 0 6px rgba(220, 0, 0, 0.6) !important;
        background: #2f2f2f !important;
        color: #fff !important;
    }

    .btn-premium {
        background: #d00000;
        border: none;
        font-weight: 600;
        padding: 10px 20px;
        transition: 0.3s;
    }

    .btn-premium:hover {
        background: #a00000;
        box-shadow: 0 0 12px rgba(200, 0, 0, 0.7);
    }

    #harga_view {
        opacity: 0;
        transform: translateY(7px);
        transition: all 0.35s ease-in-out;
    }

    #harga_view.show {
        opacity: 1;
        transform: translateY(0);
    }

    .harga-card {
        background: linear-gradient(145deg, #330000, #1a0000);
        padding: 15px;
        border-radius: 8px;
        border: 1px solid #770000;
        color: #f1f1f1;
        box-shadow: 0 0 10px rgba(120, 0, 0, 0.5);
    }
</style>

<h2 class="mb-4 text-center fw-bold"
    style="background: linear-gradient(135deg, #e63946 0%, #800000 100%);
           -webkit-background-clip: text;
           -webkit-text-fill-color: transparent;">
    Form Pemesanan Hotel
</h2>

<div class="card-premium">

@if($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('pemesanan.store') }}" method="POST">
  @csrf

  <div class="mb-3">
    <label class="premium-label">Nama Pemesan</label>
    <input type="text" name="nama_pemesan" id="nama_pemesan" class="form-control" required>
  </div>

  <div class="mb-3">
    <label class="premium-label">Jenis Kelamin</label>
    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
      <option value="">-- Pilih --</option>
      <option value="Laki-laki">Laki-laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
  </div>

  <div class="mb-3">
    <label class="premium-label">Nomor Identitas</label>
    <input type="text" name="nomor_identitas" id="nomor_identitas" class="form-control" required>
  </div>

  <div class="mb-3">
    <label class="premium-label">Tipe Kamar</label>
    <select name="tipe_kamar" id="tipe_kamar" class="form-control" required>
      <option value="">-- Pilih --</option>
      <option value="Standar" data-harga="300000">Standar - Rp 300.000</option>
      <option value="Deluxe" data-harga="500000">Deluxe - Rp 500.000</option>
      <option value="Family" data-harga="800000">Family - Rp 800.000</option>
    </select>
  </div>

  <div class="mb-3">
    <label class="premium-label">Tanggal Pemesanan</label>
    <input type="date" name="tanggal_pesan" id="tanggal_pesan" class="form-control" required>
  </div>

  <div class="mb-3">
    <label class="premium-label">Durasi Menginap (hari)</label>
    <input type="number" name="durasi_menginap" id="durasi_menginap" class="form-control" min="1" required>
  </div>

  <div class="mb-3">
    <label class="premium-label">Breakfast</label><br>
    <label class="me-3 text-light">
      <input type="radio" name="termasuk_breakfast" value="1" required> Ya
    </label>
    <label class="text-light">
      <input type="radio" name="termasuk_breakfast" value="0" required> Tidak
    </label>
  </div>

  <div class="mb-3">
    <label class="premium-label">Harga Total</label>
    <div id="harga_view" class="harga-card mt-2" style="font-size: 1.15rem;"></div>
    <input type="hidden" name="total_bayar" id="total_bayar">
  </div>

  <div class="text-end mt-3">
    <button type="submit" class="btn btn-premium">Simpan Pemesanan</button>
  </div>

</form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const tipeKamar = document.getElementById('tipe_kamar');
    const durasi = document.getElementById('durasi_menginap');
    const breakfastInput = document.getElementsByName('termasuk_breakfast');
    const hargaView = document.getElementById('harga_view');
    const totalBayar = document.getElementById('total_bayar');

    function hitungTotal() {
        const selected = tipeKamar.options[tipeKamar.selectedIndex];
        const harga = parseInt(selected.dataset.harga || 0);
        const lama = parseInt(durasi.value || 0);
        const breakfast = document.querySelector('input[name="termasuk_breakfast"]:checked');

        if (!harga || !lama || !breakfast) {
            hargaView.innerHTML = "";
            hargaView.classList.remove('show');
            totalBayar.value = "";
            return;
        }

        let total = harga * lama;

        if (breakfast.value === "1") {
            total += 50000 * lama;
        }

        let hargaSetelahDiskon = total;
        let html = "";

        if (lama > 3) {
            hargaSetelahDiskon = total * 0.9;

            html = `
                <div>
                  <span style="text-decoration: line-through; color: #aaaaaa;">
                    Rp ${total.toLocaleString('id-ID')}
                  </span><br>
                  <span class="fw-bold" style="color: #7dff7d;">
                    Rp ${Math.round(hargaSetelahDiskon).toLocaleString('id-ID')}
                  </span>
                </div>
            `;
        } else {
            html = `
                <div class="fw-bold" style="color:#ffdddd">
                  Rp ${total.toLocaleString('id-ID')}
                </div>
            `;
        }

        hargaView.innerHTML = html;

        setTimeout(() => hargaView.classList.add('show'), 15);

        totalBayar.value = Math.round(hargaSetelahDiskon);
    }

    tipeKamar.addEventListener('change', hitungTotal);
    durasi.addEventListener('input', hitungTotal);
    breakfastInput.forEach(r => r.addEventListener('change', hitungTotal));
});
</script>

@endsection

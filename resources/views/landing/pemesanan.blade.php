@extends('layouts.app')

@section('content')

<div class="container" style="max-width: 700px;">
  <div class="card shadow-sm border-0" style="border-radius: 15px;">
    <div class="card-body p-4">

      <h2 class="mb-4 text-center fw-bold"
          style="background: linear-gradient(135deg, #e63946 0%, #b10000 100%);
                 -webkit-background-clip: text;
                 -webkit-text-fill-color: transparent;">
        Form Pemesanan Hotel
      </h2>

      @if($errors->any())
        <div class="alert alert-danger shadow-sm">
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
          <label class="form-label fw-semibold">Nama Pemesan</label>
          <input type="text" name="nama_pemesan" class="form-control shadow-sm" required>
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">Jenis Kelamin</label>
          <select name="jenis_kelamin" class="form-control shadow-sm" required>
            <option value="">-- Pilih --</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">Nomor Identitas</label>
          <input type="text" name="nomor_identitas" class="form-control shadow-sm" required>
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">Tipe Kamar</label>
          <select name="tipe_kamar" id="tipe_kamar" class="form-control shadow-sm" required>
            <option value="">-- Pilih --</option>
            <option value="Standar" data-harga="300000">Standar - Rp 300.000</option>
            <option value="Deluxe" data-harga="500000">Deluxe - Rp 500.000</option>
            <option value="Family" data-harga="800000">Family - Rp 800.000</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">Tanggal Pemesanan</label>
          <input type="date" name="tanggal_pesan" class="form-control shadow-sm" required>
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">Durasi Menginap (hari)</label>
          <input type="number" name="durasi_menginap" id="durasi_menginap" 
                 class="form-control shadow-sm" min="1" required>
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">Breakfast</label><br>
          <label class="me-3">
            <input type="radio" name="termasuk_breakfast" value="1" required> Ya
          </label>
          <label>
            <input type="radio" name="termasuk_breakfast" value="0" required> Tidak
          </label>
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">Total Harga</label>
          <div id="harga_view" class="mt-2" style="font-size: 1.15rem;"></div>
          <input type="hidden" name="total_bayar" id="total_bayar">
        </div>

        <div class="text-end mt-4">
          <button type="submit" class="btn px-4 py-2 fw-semibold"
                  style="background: linear-gradient(135deg, #e63946, #b10000); border-radius: 10px; color: white;">
            Simpan Pemesanan
          </button>
        </div>

      </form>

    </div>
  </div>
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
                    <span style="text-decoration: line-through; color: #999;">
                        Rp ${total.toLocaleString('id-ID')}
                    </span><br>
                    <span class="fw-bold" style="color: #28a745;">
                        Rp ${Math.round(hargaSetelahDiskon).toLocaleString('id-ID')}
                    </span>
                    <div style="color: #d00000; font-size: 0.9rem;">Diskon 10% (lebih dari 3 hari)</div>
                </div>
            `;
        } else {
            html = `
                <div class="fw-bold">
                    Rp ${total.toLocaleString('id-ID')}
                </div>
            `;
        }

        hargaView.innerHTML = html;
        totalBayar.value = Math.round(hargaSetelahDiskon);
    }

    tipeKamar.addEventListener('change', hitungTotal);
    durasi.addEventListener('input', hitungTotal);
    breakfastInput.forEach(r => r.addEventListener('change', hitungTotal));
});
</script>

@endsection

@extends('layouts.app')

@section('content')
<div class="container py-4">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
        <div class="card-header text-white text-center py-4" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
          <h2 class="mb-0 fw-bold">📝 Form Pemesanan Hotel</h2>
          <p class="mb-0 mt-2">Isi data dengan lengkap untuk melanjutkan pemesanan</p>
        </div>
        
        <div class="card-body p-5">
          @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="border-radius: 10px;">
              <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
          @endif

          @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="border-radius: 10px;">
              <i class="bi bi-exclamation-triangle-fill me-2"></i>
              <ul class="mb-0">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
          @endif

          <form action="{{ route('pemesanan.store') }}" method="POST" class="row g-4">
            @csrf

            <div class="col-md-6">
              <label class="form-label fw-bold"><i class="bi bi-person-fill text-primary me-2"></i>Nama Pemesan</label>
              <input type="text" name="nama_pemesan" class="form-control form-control-lg" placeholder="Masukkan nama lengkap" required style="border-radius: 10px;">
            </div>

            <div class="col-md-6">
              <label class="form-label fw-bold"><i class="bi bi-gender-ambiguous text-primary me-2"></i>Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-select form-select-lg" required style="border-radius: 10px;">
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>

            <div class="col-md-6">
              <label class="form-label fw-bold"><i class="bi bi-credit-card text-primary me-2"></i>Nomor Identitas</label>
              <input type="text" name="nomor_identitas" class="form-control form-control-lg" placeholder="16 digit KTP" required style="border-radius: 10px;" maxlength="16" pattern="[0-9]{16}">
              <small class="text-muted">* Masukkan 16 digit nomor KTP</small>
            </div>

            <div class="col-md-6">
              <label class="form-label fw-bold"><i class="bi bi-door-open text-primary me-2"></i>Tipe Kamar</label>
              <select name="tipe_kamar" id="tipe_kamar" class="form-select form-select-lg" required style="border-radius: 10px;">
                <option value="">-- Pilih Tipe Kamar --</option>
                <option value="Standar">🛏️ Standar - Rp 500.000/malam</option>
                <option value="Deluxe">🌟 Deluxe - Rp 750.000/malam</option>
                <option value="Family">👨‍👩‍👧‍👦 Family - Rp 1.000.000/malam</option>
              </select>
            </div>

            <div class="col-md-6">
              <label class="form-label fw-bold"><i class="bi bi-cash text-primary me-2"></i>Harga per Malam</label>
              <input type="text" name="harga" id="harga" class="form-control form-control-lg" readonly style="border-radius: 10px; background-color: #f8f9fa; font-weight: 600;">
            </div>

            <div class="col-md-6">
              <label class="form-label fw-bold"><i class="bi bi-calendar-check text-primary me-2"></i>Tanggal Pesan</label>
              <input type="text" name="tanggal_pesan" class="form-control form-control-lg" placeholder="dd/mm/yyyy (contoh: 09/10/2025)" required style="border-radius: 10px;">
            </div>

            <div class="col-md-6">
              <label class="form-label fw-bold"><i class="bi bi-clock text-primary me-2"></i>Durasi Menginap</label>
              <input type="number" name="durasi_menginap" id="durasi_menginap" class="form-control form-control-lg" placeholder="Jumlah hari" required style="border-radius: 10px;" min="1">
              <small class="text-success">* Diskon 10% untuk menginap lebih dari 3 hari</small>
            </div>

            <div class="col-md-6">
              <label class="form-label fw-bold"><i class="bi bi-cup-hot text-primary me-2"></i>Breakfast</label>
              <div class="form-check form-switch mt-2">
                <input class="form-check-input" type="checkbox" name="termasuk_breakfast" id="breakfast" style="width: 50px; height: 25px; cursor: pointer;">
                <label class="form-check-label ms-2 fs-5" for="breakfast">
                  Termasuk Breakfast (+Rp 80.000)
                </label>
              </div>
            </div>

            <div class="col-12">
              <div class="alert alert-info" style="border-radius: 10px; background: linear-gradient(135deg, #e0f7fa 0%, #b2ebf2 100%); border: none;">
                <i class="bi bi-info-circle-fill me-2"></i>
                <strong>Informasi:</strong> Klik tombol "Hitung Total" untuk mengetahui total pembayaran sebelum menyimpan pemesanan.
              </div>
            </div>

            <div class="col-12">
              <label class="form-label fw-bold fs-5"><i class="bi bi-wallet2 text-success me-2"></i>Total Bayar</label>
              <input type="text" name="total_bayar" id="total_bayar" class="form-control form-control-lg" readonly style="border-radius: 10px; background-color: #d4edda; font-size: 1.5rem; font-weight: 700; color: #155724; border: 2px solid #28a745;">
            </div>

            <div class="col-12 d-flex justify-content-end gap-3 mt-4">
              <button type="button" id="btnHitung" class="btn btn-primary btn-lg px-5" style="border-radius: 50px; font-weight: 600;">
                <i class="bi bi-calculator me-2"></i>Hitung Total
              </button>
              <button type="submit" class="btn btn-success btn-lg px-5" style="border-radius: 50px; font-weight: 600;">
                <i class="bi bi-save me-2"></i>Simpan Pemesanan
              </button>
            </div>
          </form>
        </div>
      </div>

      <div class="text-center mt-4">
        <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary btn-lg" style="border-radius: 50px;">
          <i class="bi bi-arrow-left me-2"></i>Kembali ke Dashboard
        </a>
      </div>
    </div>
  </div>
</div>

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
    const harga = hargaMap[tipeKamar.value];
    if (harga) {
      hargaField.value = 'Rp ' + harga.toLocaleString('id-ID');
    } else {
      hargaField.value = '';
    }
    total.value = ''; // Reset total saat tipe kamar berubah
  });

  document.getElementById('btnHitung').addEventListener('click', () => {
    const tipe = tipeKamar.value;
    const h = hargaMap[tipe];
    const d = parseInt(durasi.value || 0);
    
    if (!tipe) {
      alert("⚠️ Silakan pilih tipe kamar terlebih dahulu!");
      return;
    }
    
    if (isNaN(d) || d < 1) {
      alert("⚠️ Durasi menginap harus diisi dengan angka minimal 1 hari!");
      durasi.focus();
      return;
    }
    
    let totalBayar = h * d;
    
    // Diskon 10% jika lebih dari 3 hari
    if (d > 3) {
      totalBayar *= 0.9;
    }
    
    // Tambah biaya breakfast
    if (breakfast.checked) {
      totalBayar += 80000;
    }
    
    total.value = 'Rp ' + totalBayar.toLocaleString('id-ID');
    
    // Tampilkan notifikasi sukses
    showToast('✅ Berhasil', 'Total pembayaran berhasil dihitung!', 'success');
  });

  // Function to show toast notification
  function showToast(title, message, type) {
    const toastHtml = `
      <div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
        <div class="toast show" role="alert">
          <div class="toast-header bg-${type === 'success' ? 'success' : 'danger'} text-white">
            <strong class="me-auto">${title}</strong>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"></button>
          </div>
          <div class="toast-body">
            ${message}
          </div>
        </div>
      </div>
    `;
    
    const toastElement = document.createElement('div');
    toastElement.innerHTML = toastHtml;
    document.body.appendChild(toastElement);
    
    setTimeout(() => {
      toastElement.remove();
    }, 3000);
  }
});
</script>
@endsection
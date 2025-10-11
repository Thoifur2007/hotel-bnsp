# 🏨 Aplikasi Website Hotel Serenity (Laravel 12)

Proyek ini merupakan aplikasi **Website Hotel** sederhana berbasis **Laravel**, yang menampilkan landing page hotel dengan navigasi utama, form pemesanan hotel, serta halaman admin untuk melihat daftar pemesanan.

---

## Dibuat oleh:

- **[@Thoifur2007](https://github.com/Thoifur2007)** - Fullstack Developer 

## 🚀 Fitur Utama

### 🌐 1. Landing Page
- Tampilan halaman utama hotel dengan menu navigasi:
  - **Dashboard**
  - **Tentang Kami**
  - **Galeri**
  - **Daftar Pemesanan**

### 📝 2. Form Pemesanan Hotel
Form ini digunakan untuk mencatat data pelanggan yang ingin menginap di hotel.

**Field dan Aturan:**
| Field | Deskripsi / Aturan |
|-------|--------------------|
| **Nama Pemesan** | Wajib diisi |
| **Jenis Kelamin** | Pilih antara *Laki-laki* atau *Perempuan* |
| **Nomor Identitas** | Harus 16 digit, jika tidak muncul pesan: *"isian salah.. data harus 16 digit"* |
| **Tipe Kamar** | Pilih salah satu: *Standar*, *Deluxe*, *Family* |
| **Harga** | Ditentukan otomatis berdasarkan tipe kamar |
| **Tanggal Pesan** | Format wajib `dd/mm/yyyy` |
| **Durasi Menginap** | Hanya angka, jika bukan angka muncul pesan: *"harus isi angka"* |
| **Termasuk Breakfast** | Centang jika termasuk sarapan (+Rp 80.000) |
| **Total Bayar** | Dihitung otomatis dengan tombol **Hitung Total Bayar** |

**Ketentuan Perhitungan:**
- Jika lama menginap **> 3 hari**, mendapat **diskon 10%**
- Jika termasuk breakfast, maka **tambahan Rp 80.000**

---

### 🧾 3. Halaman Daftar Pemesanan
- Menampilkan seluruh data pemesanan yang tersimpan di database.
- Kolom tabel:
  - Nama Pemesan
  - Jenis Kelamin
  - Nomor Identitas
  - Tipe Kamar
  - Harga per malam
  - Tanggal Pesan
  - Durasi Menginap
  - Termasuk Breakfast
  - Total Bayar
- Dapat diakses melalui menu navigasi **"Daftar Pemesanan"**.

---

## ⚙️ Instalasi & Konfigurasi

### 1. Clone Repository
```bash
git clone https://github.com/Thoifur2007/hotel-bnsp.git
cd hotel-bnsp

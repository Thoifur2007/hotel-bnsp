<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        return view('landing.pemesanan');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_pemesan' => 'required|string',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'nomor_identitas' => 'required|digits:16',
            'tipe_kamar' => 'required|in:Standar,Deluxe,Family',
            'tanggal_pesan' => 'required|date', // HTML date sudah Y-m-d
            'durasi_menginap' => 'required|numeric',
        ], [
            'nomor_identitas.digits' => 'Isian salah.. data harus 16 digit',
            'durasi_menginap.numeric' => 'Durasi menginap harus diisi angka',
        ]);

        // Tentukan harga
        $harga = match ($request->tipe_kamar) {
            'Standar' => 500000,
            'Deluxe' => 750000,
            'Family' => 1000000,
            default => 0,
        };

        // Hitung total awal
        $total = $harga * $request->durasi_menginap;

        // Diskon 10% jika menginap > 3 hari
        if ($request->durasi_menginap > 3) {
            $total *= 0.9;
        }

        // Tambahan breakfast
        if ($request->has('termasuk_breakfast')) {
            $total += 80000;
        }

        // Simpan ke database
        Pemesanan::create([
            'nama_pemesan' => $request->nama_pemesan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nomor_identitas' => $request->nomor_identitas,
            'tipe_kamar' => $request->tipe_kamar,
            'harga' => $harga,
            'tanggal_pesan' => $request->tanggal_pesan, // langsung simpan format Y-m-d
            'durasi_menginap' => $request->durasi_menginap,
            'termasuk_breakfast' => $request->has('termasuk_breakfast'),
            'total_bayar' => $total,
        ]);

        return redirect()->back()->with('success', 'Pemesanan berhasil disimpan!');
    }

    public function list()
    {
        $pemesanans = Pemesanan::latest()->get();
        return view('landing.daftar_pemesanan', compact('pemesanans'));
    }
}

@extends('layouts.app')

@section('content')

<h2 class="mb-4 text-center fw-bold" 
    style="background: linear-gradient(135deg, #e63946 0%, #d00000 100%);
           -webkit-background-clip: text;
           -webkit-text-fill-color: transparent;">
    Daftar Pemesanan Hotel
</h2>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if($pemesanans->isEmpty())
  <div class="alert alert-info text-center">Belum ada data pemesanan.</div>
@else
  <div class="table-responsive">
    <table class="table table-bordered table-striped align-middle">
      <thead class="table-dark text-center">
        <tr>
          <th>No</th>
          <th>Nama Pemesan</th>
          <th>Jenis Kelamin</th>
          <th>Nomor Identitas</th>
          <th>Tipe Kamar</th>
          <th>Harga</th>
          <th>Tanggal Pesan</th>
          <th>Durasi (hari)</th>
          <th>Breakfast</th>
          <th>Total Bayar</th>
        </tr>
      </thead>
      <tbody>
        @foreach($pemesanans as $p)
        <tr>
          <td class="text-center">{{ $loop->iteration }}</td>
          <td>{{ $p->nama_pemesan }}</td>
          <td>{{ $p->jenis_kelamin }}</td>
          <td>{{ $p->nomor_identitas }}</td>
          <td>{{ $p->tipe_kamar }}</td>
          <td class="text-end">Rp {{ number_format($p->harga, 0, ',', '.') }}</td>
          <td>{{ \Carbon\Carbon::parse($p->tanggal_pesan)->format('d/m/Y') }}</td>
          <td class="text-center">{{ $p->durasi_menginap }}</td>
          <td class="text-center">{{ $p->termasuk_breakfast ? 'Ya' : 'Tidak' }}</td>
          <td class="text-end fw-bold">Rp {{ number_format($p->total_bayar, 0, ',', '.') }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endif

<div class="text-end mt-3">
  <a href="{{ route('pemesanan') }}" class="btn btn-primary">
    Tambah Pemesanan Baru
  </a>
</div>

@endsection

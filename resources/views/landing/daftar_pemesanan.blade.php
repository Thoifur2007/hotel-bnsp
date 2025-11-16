@extends('layouts.app')

@section('content')

<style>
    .title {
        font-weight: 700;
        font-size: 2rem;
        color: #e63946;
        margin-bottom: 0.5rem;
    }

    .subtitle {
        color: #6c757d;
        font-size: 0.95rem;
        margin-bottom: 2rem;
    }

    .table-card {
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        padding: 28px;
        border: 1px solid #e9ecef;
    }

    .custom-table {
        margin-bottom: 0;
    }

    .custom-table thead th {
        background: #f8f9fa;
        color: #495057;
        font-weight: 600;
        font-size: 0.875rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        border-bottom: 2px solid #dee2e6;
        padding: 14px 12px;
    }

    .custom-table tbody td {
        padding: 14px 12px;
        color: #212529;
        font-size: 0.9rem;
        vertical-align: middle;
        border-bottom: 1px solid #f1f3f5;
    }

    .custom-table tbody tr {
        transition: background-color 0.15s ease;
    }

    .custom-table tbody tr:hover {
        background-color: #f8f9fa;
    }

    .custom-table tbody tr:last-child td {
        border-bottom: none;
    }

    .btn-add {
        padding: 11px 24px;
        border-radius: 8px;
        font-weight: 500;
        font-size: 0.95rem;
        background: #e63946;
        border: none;
        transition: all 0.2s ease;
    }

    .btn-add:hover {
        background: #e63946;
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(253, 13, 45, 0.25);
    }

    .alert {
        border-radius: 10px;
        border: none;
        font-size: 0.9rem;
    }

    .alert-success {
        background: #d1e7dd;
        color: #0f5132;
    }

    .alert-info {
        background: #cff4fc;
        color: #055160;
    }

    .badge-yes {
        background: #d1e7dd;
        color: #0f5132;
        padding: 4px 10px;
        border-radius: 6px;
        font-weight: 500;
        font-size: 0.8rem;
    }

    .badge-no {
        background: #f8d7da;
        color: #842029;
        padding: 4px 10px;
        border-radius: 6px;
        font-weight: 500;
        font-size: 0.8rem;
    }

    .total-highlight {
        color: #0d6efd;
        font-weight: 600;
    }
</style>

<div class="container py-5">

    <div class="text-center">
        <h2 class="page-title">Daftar Pemesanan Hotel</h2>
        <p class="page-subtitle">Kelola dan pantau semua transaksi pemesanan kamar</p>
    </div>

    @if(session('success'))
      <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    @if($pemesanans->isEmpty())
      <div class="alert alert-info text-center">
        Belum ada data pemesanan yang tercatat
      </div>
    @else

    <div class="table-card">
        <div class="table-responsive">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th style="width: 50px;">No</th>
                        <th>Nama Pemesan</th>
                        <th>Jenis Kelamin</th>
                        <th>Nomor Identitas</th>
                        <th>Tipe Kamar</th>
                        <th class="text-end">Harga</th>
                        <th>Tanggal Pesan</th>
                        <th class="text-center">Durasi</th>
                        <th class="text-center">Breakfast</th>
                        <th class="text-end">Total Bayar</th>
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
                        <td class="text-center">{{ $p->durasi_menginap }} hari</td>
                        <td class="text-center">
                            <span class="{{ $p->termasuk_breakfast ? 'badge-yes' : 'badge-no' }}">
                                {{ $p->termasuk_breakfast ? 'Ya' : 'Tidak' }}
                            </span>
                        </td>
                        <td class="text-end total-highlight">Rp {{ number_format($p->total_bayar, 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @endif

    <div class="text-end mt-4">
        <a href="{{ route('pemesanan') }}" class="btn btn-primary btn-add">
            Tambah Pemesanan Baru
        </a>
    </div>
</div>

@endsection
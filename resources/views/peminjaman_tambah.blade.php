@extends('layouts.app')

@section('content')
<div class="container-fluid p-4" style="font-family: 'Poppins', sans-serif;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Tambah Catatan Peminjaman</h2>
        <a href="/peminjaman" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="card shadow-sm border-0 p-4">
        <form action="/peminjaman/simpan" method="POST">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">Nama Siswa / Peminjam:</label>
                <input type="text" name="nama_peminjam" class="form-control" placeholder="Masukkan nama lengkap" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Alat yang Dipinjam:</label>
                <select name="alat_id" class="form-select" required>
                    <option value="">-- Pilih Alat --</option>
                    @foreach($alatList as $item)
                        <option value="{{ $item->id }}">
                            {{ $item->nama_alat }} (Stok: {{ $item->stok }})
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Jatuh Tempo (Kembali):</label>
                <input type="date" name="tgl_kembali_rencana" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success w-100 py-2">
                <i class="fas fa-save me-2"></i> Simpan Transaksi
            </button>
        </form>
    </div>
</div>
@endsection
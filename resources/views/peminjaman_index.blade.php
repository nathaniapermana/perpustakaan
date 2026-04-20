@extends('layouts.app') @section('content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Data Peminjaman</h3>
        <a href="/peminjaman/tambah" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i> Tambah Peminjaman
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Peminjam</th>
                        <th>Alat</th>
                        <th>Tgl Pinjam</th>
                        <th>Status</th>
                        <th>Denda</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($peminjamans as $p)
                    <tr>
                        <td>{{ $p->user->name }}</td>
                        <td>{{ $p->alat->nama_alat }}</td>
                        <td>{{ $p->tanggal_pinjam }}</td>
                        <td>
                            <span class="badge {{ $p->status == 'dipinjam' ? 'bg-warning' : 'bg-success' }}">
                                {{ ucfirst($p->status) }}
                            </span>
                        </td>
                        <td>
                            @if($p->denda > 0)
                                <span class="text-danger fw-bold">Rp{{ number_format($p->denda) }}</span>
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>
                        <td>
                            @if($p->status == 'dipinjam')
                                <a href="/peminjaman/kembali/{{ $p->id }}" class="btn btn-sm btn-success">
                                    Kembalikan
                                </a>
                            @else
                                <button class="btn btn-sm btn-secondary" disabled>Selesai</button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
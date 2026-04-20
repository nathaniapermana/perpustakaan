@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card p-4 shadow-sm border-0 rounded-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="fw-bold m-0">Kelola Data Alat</h5>
            <button class="btn btn-primary btn-sm rounded-3">
                <i class="fas fa-plus me-1"></i> Tambah Alat
            </button>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Alat</th>
                        <th>Stok</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($alat as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->nama_alat }}</td>
                        <td>{{ $item->stok }}</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-info text-white me-2">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="{{ url('/alat/hapus/'.$item->id) }}" 
                               class="btn btn-sm btn-danger" 
                               onclick="return confirm('Yakin ingin menghapus alat ini?')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted p-4">
                            Belum ada data alat yang tersimpan.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
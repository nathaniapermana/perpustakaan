@extends('layouts.app')

@section('content')
<div class="mb-4">
    <h2 class="fw-bold">Kelola Alat</h2>
    <p class="text-muted">Daftar seluruh inventaris alat yang tersedia.</p>
</div>

<div class="card p-4 shadow-sm border-0 rounded-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 class="fw-bold m-0">Data Alat</h5>
        
        <a href="{{ url('/alat/tambah') }}" class="btn btn-primary rounded-3 px-3">
            <i class="fas fa-plus me-2"></i> Tambah Alat
        </a>
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
                @foreach($semuaAlat as $index => $alat)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $alat->nama_alat }}</td>
                    <td>
                        <span class="badge bg-primary rounded-pill px-3">{{ $alat->stok }}</span>
                    </td>
                    <td class="text-center">
                        <a href="{{ url('/alat/edit/'.$alat->id) }}" class="btn btn-sm btn-warning text-white rounded-3 me-2">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        
                        <a href="{{ url('/alat/hapus/'.$alat->id) }}" 
                           class="btn btn-sm btn-danger rounded-3" 
                           onclick="return confirm('Yakin ingin menghapus alat ini?')">
                            <i class="fas fa-trash-alt"></i> Hapus
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
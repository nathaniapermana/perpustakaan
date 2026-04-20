@extends('layouts.app')

@section('content')
<div class="mb-4">
    <h2 class="fw-bold text-dark">Data Kategori</h2>
    <p class="text-muted">Kelola kategori alat perpustakaan agar lebih terorganisir.</p>
</div>

<div class="card border-0 shadow-sm rounded-4 p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 class="fw-bold m-0">Daftar Kategori</h5>
        <a href="{{ url('/kategori/tambah') }}" class="btn btn-primary rounded-3 px-3">
            <i class="fas fa-plus me-2"></i> Tambah Kategori
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th class="ps-3">No</th>
                    <th>Nama Kategori</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($semuaKategori as $index => $kategori)
                <tr>
                    <td class="ps-3 fw-bold">{{ $index + 1 }}</td>
                    <td>{{ $kategori->nama_kategori }}</td>
                    <td class="text-center">
                        <a href="{{ url('/kategori/edit/'.$kategori->id) }}" 
                           class="btn btn-sm btn-warning text-white rounded-3 me-2">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="{{ url('/kategori/hapus/'.$kategori->id) }}" 
                           class="btn btn-sm btn-danger rounded-3" 
                           onclick="return confirm('Yakin ingin menghapus kategori ini?')">
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
@extends('layouts.app')

@section('content')
<div class="mb-4">
    <h2 class="fw-bold">Tambah Kategori</h2>
    <p class="text-muted">Masukkan nama kategori baru untuk inventaris perpustakaan.</p>
</div>

<div class="card p-4 shadow-sm border-0 rounded-4">
    <form action="{{ url('/kategori/simpan') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label fw-bold">Nama Kategori</label>
            <input type="text" name="nama_kategori" class="form-control rounded-3" placeholder="Contoh: Alat Kebersihan" required>
        </div>
        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary rounded-3 px-4 py-2">
                <i class="fas fa-save me-2"></i> Simpan Kategori
            </button>
            <a href="{{ url('/kategori') }}" class="btn btn-outline-secondary rounded-3 px-4 py-2">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection
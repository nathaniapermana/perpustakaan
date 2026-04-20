@extends('layouts.app')

@section('content')
<div class="mb-4">
    <h2 class="fw-bold">Edit Data Alat</h2>
    <p class="text-muted">Perbarui informasi alat pada inventaris laboratorium.</p>
</div>

<div class="card p-4 shadow-sm border-0 rounded-4">
    <form action="{{ url('/alat/update/'.$alat->id) }}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label class="form-label fw-bold">Nama Alat</label>
            <input type="text" name="nama_alat" class="form-control rounded-3" value="{{ $alat->nama_alat }}" required>
        </div>

        <div class="mb-4">
            <label class="form-label fw-bold">Stok</label>
            <input type="number" name="stok" class="form-control rounded-3" value="{{ $alat->stok }}" required>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary rounded-3 px-4 py-2">
                <i class="fas fa-save me-2"></i> Perbarui Data
            </button>
            <a href="{{ url('/alat-daftar') }}" class="btn btn-outline-secondary rounded-3 px-4 py-2">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection
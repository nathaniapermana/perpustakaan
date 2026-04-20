@extends('layouts.app')

@section('content')
<div class="mb-4">
    <h2 class="fw-bold">Edit Kategori</h2>
</div>

<div class="card border-0 shadow-sm rounded-4 p-4">
    <form action="{{ url('/kategori/update/'.$kategori->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label fw-bold">Nama Kategori</label>
            <input type="text" name="nama_kategori" class="form-control rounded-3" value="{{ $kategori->nama_kategori }}" required>
        </div>
        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-warning text-white rounded-3 px-4">Perbarui</button>
            <a href="{{ url('/kategori') }}" class="btn btn-outline-secondary rounded-3">Batal</a>
        </div>
    </form>
</div>
@endsection
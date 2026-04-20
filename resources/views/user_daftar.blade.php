@extends('layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar User</h2>
        <a href="/user/tambah" class="btn btn-primary">
            <i class="fas fa-user-plus me-2"></i> Tambah Anggota
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th class="ps-3">No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- Kita gunakan $users sesuai dengan yang dikirim Controller --}}
                @foreach($users as $index => $user)
                <tr>
                    <td class="ps-3">{{ $index + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="text-center">
                        <a href="/user/hapus/{{ $user->id }}" class="btn btn-danger btn-sm" 
                           onclick="return confirm('Yakin ingin hapus user ini?')">
                           Hapus
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<style>
    /* Import Google Font Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
    
    .dashboard-wrapper {
        font-family: 'Poppins', sans-serif !important;
    }
</style>

<div class="container-fluid p-4 dashboard-wrapper">
    <div class="mb-4">
        <h1 class="h3 mb-1 text-gray-800" style="font-weight: 700;">Halo, Admin! 👋</h1>
        <p class="text-muted">Selamat datang kembali di sistem pengelolaan inventaris sekolah.</p>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card shadow border-left-primary h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Alat</div>
                            <div class="h3 mb-0 font-weight-bold text-gray-800">{{ $totalAlat }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-box fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card shadow border-left-warning h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Sedang Dipinjam</div>
                            <div class="h3 mb-0 font-weight-bold text-gray-800">{{ $dipinjam }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="font-weight-bold">Status Sistem</h5>
                    <p>Sistem saat ini berjalan normal. Silakan gunakan menu di samping untuk mengelola inventaris atau melihat daftar peminjaman.</p>
                    <a href="/alat-daftar" class="btn btn-primary btn-sm">Lihat Daftar Alat</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
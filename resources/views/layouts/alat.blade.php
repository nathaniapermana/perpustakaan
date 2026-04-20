<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Inventaris Sekolah</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        body { font-family: 'Poppins', sans-serif !important; background-color: #f8f9fc; }
        .sidebar { min-height: 100vh; background: #2e59d9; color: white; width: 250px; }
        .nav-link { color: rgba(255,255,255,0.8); }
        .nav-link:hover, .nav-link.active { color: white; background: rgba(255,255,255,0.1); }
    </style>
</head>
<body>

<div class="d-flex">
    <div class="sidebar p-3">
        <h4 class="text-white text-center py-3">INVENTARIS</h4>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="/dashboard" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                    <i class="fas fa-home me-2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="/alat-daftar" class="nav-link {{ request()->is('alat-daftar') ? 'active' : '' }}">
                    <i class="fas fa-box me-2"></i> Kelola Alat
                </a>
            </li>
            <li class="nav-item">
                <a href="/peminjaman" class="nav-link {{ request()->is('peminjaman') ? 'active' : '' }}">
                    <i class="fas fa-clipboard-list me-2"></i> Peminjaman
                </a>
            </li>
        </ul>
        <hr>
        <a href="/logout" class="nav-link text-danger">
            <i class="fas fa-sign-out-alt me-2"></i> Logout
        </a>
    </div>

    <div class="flex-grow-1">
        <nav class="navbar navbar-expand navbar-light bg-white shadow-sm mb-4">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Halo, Anya!</span>
            </div>
        </nav>

        <div class="container-fluid px-4">
            @yield('content')
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart School Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        :root { --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        body { font-family: 'Poppins', sans-serif; background-color: #f8f9fa; }
        
        .sidebar { background: var(--primary-gradient); min-height: 100vh; color: #fff; padding: 2rem 1rem; }
        .sidebar-brand { font-size: 1.5rem; font-weight: 600; margin-bottom: 2rem; display: flex; align-items: center; gap: 10px; }
        
        /* Logika Sidebar Aktif */
        .nav-link { color: rgba(255,255,255,0.8); border-radius: 10px; margin-bottom: 8px; transition: 0.3s; display: flex; align-items: center; gap: 15px; }
        .nav-link:hover { color: #fff; background: rgba(255,255,255,0.1); }
        .nav-link.active { color: #fff; background: rgba(255,255,255,0.3); font-weight: 500; }
        
        .main-content { padding: 2rem; }
        .card { border-radius: 20px; border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
    </style>
</head>
<body>

<div class="container-fluid p-0">
    <div class="row g-0">
        <nav class="col-md-2 sidebar">
            <div class="sidebar-brand"><i class="fas fa-school"></i> Smart School</div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ url('/dashboard') }}">
                        <i class="fas fa-th-large"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('alat-daftar') ? 'active' : '' }}" href="{{ route('alat.daftar') }}">
                        <i class="fas fa-tools"></i> Kelola Alat
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('kategori') ? 'active' : '' }}" href="{{ url('/kategori') }}">
                        <i class="fas fa-tags"></i> Kategori
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('user-daftar') ? 'active' : '' }}" href="{{ url('/user-daftar') }}">
                        <i class="fas fa-users"></i> Kelola User
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('peminjaman') ? 'active' : '' }}" href="{{ url('/peminjaman') }}">
                        <i class="fas fa-exchange-alt"></i> Peminjaman
                    </a>
                </li>
                <hr style="opacity: 0.2;">
                <li class="nav-item">
                    <a class="nav-link text-danger" href="{{ url('/logout') }}">
                        <i class="fas fa-sign-out-alt"></i> Keluar
                    </a>
                </li>
            </ul>
        </nav>

        <main class="col-md-10 main-content">
            @yield('content')
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<nav class="sidebar shadow-sm">
    <div class="sidebar-header p-3 border-bottom border-secondary">
        <h4 class="text-white fw-bold">Admin Panel</h4>
    </div>
    
    <ul class="nav flex-column mt-3">
        <li class="nav-item px-2">
            <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" 
               href="{{ url('/dashboard') }}">
                <i class="fas fa-home me-2"></i> Dashboard
            </a>
        </li>

        <li class="nav-item px-2">
            <a class="nav-link {{ request()->is('alat-daftar') ? 'active' : '' }}" 
               href="{{ route('alat.daftar') }}">
                <i class="fas fa-tools me-2"></i> Kelola Alat
            </a>
        </li>
<li class="nav-item px-2">
    <a class="nav-link {{ request()->is('user*') ? 'active' : '' }}" 
       href="{{ url('/user') }}">
        <i class="fas fa-users me-2"></i> Kelola User
    </a>
</li>
        <li class="nav-item px-2 mt-4">
            <a class="nav-link text-danger" href="{{ url('/logout') }}">
                <i class="fas fa-sign-out-alt me-2"></i> Logout
            </a>
        </li>
    </ul>
</nav>

<style>
    /* Sidebar Layout */
    .sidebar { 
        height: 100vh; 
        background: #212529; /* Warna gelap yang lebih elegan */
        width: 250px; 
    }
    
    /* Link Styling */
    .nav-link { 
        color: #adb5bd; 
        padding: 12px 20px; 
        border-radius: 8px;
        transition: all 0.3s;
        margin-bottom: 5px;
    }

    /* Efek Hover */
    .nav-link:hover { 
        background: #343a40; 
        color: #ffffff;
    }

    /* Kondisi Aktif (Saat halaman dibuka) */
    .nav-link.active { 
        background: #0d6efd !important; /* Biru cerah */
        color: #ffffff !important;
        font-weight: 600;
    }
</style>
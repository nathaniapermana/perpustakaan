<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Smart School Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
        }
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .login-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            overflow: hidden;
            width: 100%;
            max-width: 1000px;
            display: flex;
        }
        /* Sisi Kiri (Gambar & Welcome) */
        .login-sidebar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            padding: 60px;
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .login-sidebar i.fa-book-reader {
            font-size: 80px;
            margin-bottom: 30px;
            opacity: 0.8;
        }
        .login-sidebar h2 {
            font-weight: 600;
            margin-bottom: 15px;
        }
        .login-sidebar p {
            font-weight: 300;
            opacity: 0.9;
            font-size: 15px;
            line-height: 1.6;
        }
        /* Sisi Kanan (Form) */
        .login-form-section {
            padding: 60px;
            width: 50%;
        }
        .brand-logo {
            color: #764ba2;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 40px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .brand-logo i {
            font-size: 30px;
        }
        .form-control {
            border-radius: 10px;
            padding: 12px 15px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
        }
        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(118, 75, 162, 0.25);
            border-color: #764ba2;
        }
        .input-group-text {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            color: #888;
        }
        .btn-login {
            background: linear-gradient(to right, #667eea, #764ba2);
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-weight: 500;
            margin-top: 20px;
            transition: all 0.3s ease;
        }
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(118, 75, 162, 0.4);
        }
        .footer-text {
            text-align: center;
            margin-top: 40px;
            font-size: 13px;
            color: #888;
        }
        /* Responsive untuk HP */
        @media (max-width: 768px) {
            .login-card {
                flex-direction: column;
            }
            .login-sidebar, .login-form-section {
                width: 100%;
                padding: 40px;
            }
            .login-sidebar {
                border-bottom: 5px solid #fff;
            }
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="login-card">
        
        <div class="login-sidebar">
            <i class="fas fa-book-reader"></i>
            <h2>Halo, Admin!</h2>
            <p>Selamat datang kembali di Panel Kontrol Perpustakaan Smart School. Kelola data buku, siswa, dan transaksi peminjaman dengan mudah dalam satu sistem terpadu.</p>
        </div>
        
        <div class="login-form-section">
            <div class="brand-logo">
                <i class="fas fa-school"></i>
                Smart School
            </div>
            
            <h4 class="mb-2" style="font-weight:600;">Masuk ke Akun Anda</h4>
            <p class="text-muted mb-4" style="font-size:14px;">Silakan masukkan kredensial admin Anda.</p>
            
            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label text-secondary" style="font-size:14px;">Email Sekolah</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input type="email" name="email" class="form-control" placeholder="admin@sekolah.sch.id" required>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label class="form-label text-secondary" style="font-size:14px;">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                    </div>
                </div>
                
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember">
                        <label class="form-check-label text-muted" for="remember" style="font-size:13px;">Ingat Saya</label>
                    </div>
                    <a href="#" class="text-decoration-none" style="font-size:13px; color:#764ba2;">Lupa Password?</a>
                </div>
                
                <button type="submit" class="btn btn-primary btn-login w-100 text-white">
                    <i class="fas fa-sign-in-alt me-2"></i> Masuk Sekarang
                </button>
            </form>
            
            <div class="footer-text">
                &copy; 2026 Smart School Perpustakaan. All rights reserved.
            </div>
        </div>
        
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
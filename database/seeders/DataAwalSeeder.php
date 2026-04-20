<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alat;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DataAwalSeeder extends Seeder
{
    public function run()
    {
        // 1. Buat User Admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);

        // 2. Isi Data Alat
        Alat::create(['nama_alat' => 'Laptop', 'stok' => 10]);
        Alat::create(['nama_alat' => 'Proyektor', 'stok' => 5]);

        // 3. Isi Data Peminjaman (Biar angka "Sedang Dipinjam" muncul)
        Peminjaman::create([
            'user_id' => 1,
            'alat_id' => 1,
            'status' => 'dipinjam'
        ]);
    }
}
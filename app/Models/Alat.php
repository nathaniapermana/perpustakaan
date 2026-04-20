<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    // Mengizinkan kolom-kolom ini diisi melalui form
    protected $fillable = [
        'nama_alat', 
        'stok', 
        'kategori_id'
    ];

    // Relasi ke Kategori: Satu Alat milik satu Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    // Relasi ke Peminjaman (Opsional: kalau kamu butuh data ini)
    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
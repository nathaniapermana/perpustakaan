<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    // Nama tabel di database (pastikan di HeidiSQL namanya 'peminjaman', tanpa 's')
    protected $table = 'peminjaman';

    // Kolom-kolom yang boleh diisi melalui form
    protected $fillable = [
        'user_id', 
        'alat_id', 
        'status', 
        'tgl_kembali_rencana'
    ];

    /**
     * Relasi ke model Alat (opsional, tapi bagus untuk masa depan)
     * Kalau nanti mau menampilkan nama alat di tabel, pakai relasi ini.
     */
    public function alat()
    {
        return $this->belongsTo(Alat::class, 'alat_id');
    }
}
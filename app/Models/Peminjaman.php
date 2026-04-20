<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';
    public $timestamps = false; // Matikan timestamps agar tidak error
    protected $fillable = ['nama_peminjam', 'alat_id', 'status', 'tgl_kembali_rencana', 'user_id'];
    
    // Opsional: Jika tabelmu punya ID dengan nama lain, tambahkan baris ini:
    // protected $primaryKey = 'id'; 
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    // Ini penting supaya Laravel mengizinkan kita menyimpan data ke kolom nama_kategori
    protected $fillable = ['nama_kategori'];

    // Relasi ke Alat (Satu kategori bisa memiliki banyak alat)
    public function alat()
    {
        return $this->hasMany(Alat::class, 'kategori_id');
    }
}
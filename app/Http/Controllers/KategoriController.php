<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $semuaKategori = Kategori::all();
        return view('kategori_daftar', compact('semuaKategori'));
    }

    public function tambahView()
    {
        return view('kategori_tambah');
    }

    public function simpan(Request $request)
    {
        $request->validate(['nama_kategori' => 'required']);
        
        Kategori::create([
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect('/kategori')->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function editView($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori_edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['nama_kategori' => 'required']);
        
        $kategori = Kategori::findOrFail($id);
        $kategori->update([
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect('/kategori')->with('success', 'Kategori diperbarui!');
    }

    public function hapus($id)
    {
        Kategori::destroy($id);
        return redirect('/kategori')->with('success', 'Kategori dihapus!');
    }
}
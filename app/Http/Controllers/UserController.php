<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Menampilkan daftar user
    public function index()
    {
        $users = User::all();
        return view('user_daftar', compact('users'));
    }

    // Menampilkan form tambah user
    public function tambahView()
    {
        return view('user_tambah');
    }

    // Menyimpan data user ke database
    public function simpan(Request $request)
    {
        // Validasi input
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email', // Mencegah email duplikat
            'password' => 'required|min:6',
        ]);

        // Simpan ke database
        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password), // Password harus di-hash (enkripsi)
        ]);

        return redirect('/user-daftar')->with('success', 'User berhasil ditambahkan!');
    }

    // Menghapus user
    public function hapus($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/user-daftar')->with('success', 'User berhasil dihapus!');
    }
}
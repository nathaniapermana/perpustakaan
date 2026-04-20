<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AlatController extends Controller
{
    // --- DASHBOARD ---
    public function dashboard() 
    {
        $totalAlat = Alat::count();
        $dipinjam = Peminjaman::where('status', 'dipinjam')->count();
        return view('dashboard', compact('totalAlat', 'dipinjam'));
    }

    // --- KELOLA ALAT ---
    public function kelolaAlat()
    {
        $semuaAlat = Alat::all();
        return view('alat_daftar', compact('semuaAlat'));
    }

    public function tambahAlatView()
    {
        return view('alat_tambah');
    }

    public function simpanAlat(Request $request)
    {
        $request->validate([
            'nama_alat' => 'required', 
            'stok' => 'required|integer'
        ]);
        
        Alat::create([
            'nama_alat' => $request->nama_alat, 
            'stok' => $request->stok
        ]);
        
        return redirect('/alat-daftar')->with('success', 'Alat berhasil ditambahkan!');
    }

    // Fungsi ini yang tadi hilang (Penyebab Error)
    public function editAlatView($id)
    {
        $alat = Alat::findOrFail($id);
        return view('alat_edit', compact('alat'));
    }

    // Fungsi ini yang tadi hilang (Penyebab Error)
    public function updateAlat(Request $request, $id)
    {
        $request->validate([
            'nama_alat' => 'required',
            'stok' => 'required|integer',
        ]);

        $alat = Alat::findOrFail($id);
        $alat->update([
            'nama_alat' => $request->nama_alat,
            'stok' => $request->stok,
        ]);

        return redirect('/alat-daftar')->with('success', 'Alat berhasil diupdate!');
    }

    public function hapusAlat($id)
    {
        $alat = Alat::findOrFail($id);
        $alat->delete();
        return redirect('/alat-daftar')->with('success', 'Alat berhasil dihapus!');
    }

    // --- PEMINJAMAN ---
    public function daftarPeminjaman()
    {
        $peminjaman = Peminjaman::all();
        $dendaPerHari = 10000;

        foreach ($peminjaman as $p) {
            $p->denda = 0;
            if ($p->tgl_kembali_rencana && $p->status == 'dipinjam') {
                $jatuhTempo = Carbon::parse($p->tgl_kembali_rencana);
                if (Carbon::now()->gt($jatuhTempo)) {
                    $telat = $jatuhTempo->diffInDays(Carbon::now());
                    $p->denda = $telat * $dendaPerHari;
                }
            }
        }
        
        return view('peminjaman_daftar', compact('peminjaman'));
    }

    public function kembalikanAlat($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update(['status' => 'dikembalikan']);
        
        $alat = Alat::find($peminjaman->alat_id);
        if ($alat) {
            $alat->increment('stok');
        }

        return redirect('/peminjaman')->with('success', 'Alat berhasil dikembalikan!');
    }

    public function tambahPeminjamanView()
    {
        $alatList = Alat::where('stok', '>', 0)->get(); 
        return view('peminjaman_tambah', compact('alatList'));
    }

    public function simpanPeminjaman(Request $request)
    {
        $request->validate([
            'nama_peminjam' => 'required',
            'alat_id' => 'required',
            'tgl_kembali_rencana' => 'required|date',
        ]);

        Peminjaman::create([
            'nama_peminjam' => $request->nama_peminjam,
            'alat_id' => $request->alat_id,
            'status' => 'dipinjam',
            'tgl_kembali_rencana' => $request->tgl_kembali_rencana,
        ]);

        $alat = Alat::find($request->alat_id);
        if ($alat) {
            $alat->decrement('stok');
        }

        return redirect('/peminjaman')->with('success', 'Alat berhasil dipinjam!');
    }
}
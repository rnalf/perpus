<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Http\Requests\StorePeminjamanRequest;
use App\Http\Requests\UpdatePeminjamanRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjamans = Peminjaman::all(); // Mengambil semua data peminjaman
        return view('admin.peminjaman', compact('peminjamans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peminjamanm.create'); // Ganti 'peminjaman.create' dengan nama view Anda
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePeminjamanRequest $request)
    {
        // Validasi inputan di sini jika diperlukan

        $request->validate([
            'username' => 'required',
            'judulBuku' => 'required',
            'tanggalPeminjam' => 'required|date',
            'tanggalPengembalian' => 'required|date',
        ]);

        $peminjaman = new Peminjaman();
        $peminjaman->username = $request->username;
        $peminjaman->judul_buku = $request->judulBuku;
        $peminjaman->tanggal_peminjam = $request->tanggalPeminjam;
        $peminjaman->tanggal_pengembalian = $request->tanggalPengembalian;
        $peminjaman->save();

        // Redirect ke halaman detail atau halaman lain yang sesuai
        return redirect()->route('detail')->with('success', 'Peminjaman berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(peminjaman $peminjaman)
    {
        return view('peminjaman.detail', compact('peminjaman')); // Ganti 'peminjaman.detail' dengan nama view Anda
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePeminjamanRequest $request, peminjaman $peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(peminjaman $peminjaman)
    {
        //
    }

    /**
     * Kembalikan buku yang dipinjam.
     */
    public function kembalikan($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        // Lakukan logika pengembalian peminjaman di sini, misalnya mengubah status peminjaman menjadi "dikembalikan"
        $peminjaman->status = 'dikembalikan';
        $peminjaman->tanggal_pengembalian = now();

        $peminjaman->update([
            'status' => 'dikembalikan',
            'tanggal_pengembalian' => now(), // Tanggal pengembalian diisi dengan tanggal saat ini
        ]);

        return redirect()->back()->with('success', 'Peminjaman berhasil dikembalikan');
    }
}

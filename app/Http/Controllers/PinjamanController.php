<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    //
    public function index() {
        return view("pinjam", [
            "buku"=> Buku::all()
        ]);
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            'username' => 'required',
            'judulBuku' => 'required',
            'tanggalPeminjaman' => 'required|date',
            'tanggalPengembalian' => 'required|date',
            ''
        ]);
    }
    
}

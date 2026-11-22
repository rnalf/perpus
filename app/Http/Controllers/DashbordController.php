<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function index()
    {
        
        $totalUser = User ::all();
        $totalBuku = Buku ::all();
        $totalPeminjaman = Peminjaman::all();
        return view('admin.dashboard', [
            'totalBuku'=> $totalBuku
            ,'totalUser'=> $totalUser
            ,'totalPeminjaman'=> $totalPeminjaman
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku; // Ganti YourModel dengan nama model yang sesuai

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $searchText = $request->input('searchText');
        $results = Buku::where('judul','penulis', 'penerbit', 'tahunTerbit', 'gambar', "%$searchText%")->get();
        return response()->json($results);
    }
}
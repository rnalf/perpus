<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\kategori;
use App\Models\ulasan;
use App\Models\KategoriBukuRelasi;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        $kategoris = kategori::all();
        return view('admin.buku', [
            
            'kategoris' => $kategoris,
            'buku' => $buku]);
    }

// public function count()
// {
//     $totalBuku = Buku::count();
//     return view('jumlah-buku', compact('totalBuku'));
// }



    public function index1()
    {
        $bukus = Buku::all();
        $kategoris = kategori::all();
        return view('buku', [
            
            'kategoris' => $kategoris,
            'bukus' => $bukus]);
    }

    
    public function create()
    {

        return view('buku.index');
        // Add code for displaying the create form
    }

    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahunTerbit' => 'required|numeric',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
        ]);
    
        

        // if ($request->hasFile('gambar')) {
        //     $image = $request->file('gambar');
        //     $imageName = time().'.'.$image->getClientOriginalExtension();
        //     $image->move(public_path('images'), $imageName);
        //     $validatedData['gambar'] = $imageName;
        
    
        $bukus = Buku::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahunTerbit' => $request->tahunTerbit,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'gambar' => $request->gambar
        ]);
        
        KategoriBukuRelasi::create([
            'kategori_id' => $request->kategori,
            'buku_id' => $bukus->id,

        ]);
        
        // $request->validate([
        //     'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // maksimum 2MB
        // ]);

        // $gambar = $request->file('gambar');
        // $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
        // $gambar->move(public_path('images'), $nama_gambar);

        // $bukus = new Buku();
        // $bukus->sampul = $nama_gambar;
        // $bukus->save();


        return back();
    }        
    public function show(Buku $buku,$id)
    {
        $buku = Buku::where('id', $id)->first();
        // $ulasan = ulasan::where('id_users', auth()->user()->id)->where('id_buku', $id)->all
        return view('detail', compact('buku'));
    }
    

    public function edit(Buku $buku)
    {
        
    }

   

    public function update(Request $request, Buku $buku)
{
    // Validasi input
    $request->validate([
        'judul' => 'required|string',
        'penulis' => 'required|string',
        'penerbit' => 'required|string',
        'tahunTerbit' => 'required|integer',
        'deskripsi' => 'required|string',
        'kategori' => 'required|exists:kategoris,id',
        'gambar' => 'required|string',
    ]);

    // Cari data buku berdasarkan ID
    $buku = Buku::find($buku);

    // Jika data buku tidak ditemukan, kembalikan response 404
    if (!$buku) {
        return redirect()->back()->with('error', 'Buku tidak ditemukan');
    }

    // Update data buku dengan request yang diterima
    $buku->update([
        'judul' => $request->judul,
        'penulis' => $request->penulis,
        'penerbit' => $request->penerbit,
        'tahunTerbit' => $request->tahunTerbit,
        'deskripsi' => $request->deskripsi,
        'kategori' => $request->kategori,
        'gambar' => $request->gambar,
    ]);

    // Redirect kembali ke halaman yang sesuai dengan pesan sukses
    return redirect()->back()->with('success', 'Buku berhasil diupdate');
}


    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();
    
        return redirect('/bukus')->with('success', 'Buku Telah Dihapus');
    }
    

}

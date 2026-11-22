<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
       public function index()
    {
        $users = User::all();
        return view('admin.petugas', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    
public function create()
{
    
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'username' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'namalengkap' => 'required|string',
            'alamat' => 'required|string',
            'role' => 'required|string',
        ]);
    
        // Simpan data baru ke database
        $user = new User();
        $user->username = $validatedData['username'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']); // Jangan lupa hash password
        $user->namalengkap = $validatedData['namalengkap'];
        $user->alamat = $validatedData['alamat'];
        $user->role = $validatedData['role'];
        $user->save();
    
        // Redirect kembali ke halaman sebelumnya atau halaman tertentu
        return redirect()->back()->with('success', 'Data berhasil diperbarui.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
    
        $validatedData = $request->validate([
            'username' => 'required|string',
            'email' => 'required|email',
            'namalengkap' => 'required|string',
            'alamat' => 'required|string',
            'role' => 'required|in:admin,petugas,peminjam'
        ]);
    
        $user->username = $validatedData['username'];
        $user->email = $validatedData['email'];
        $user->namalengkap = $validatedData['namalengkap'];
        $user->alamat = $validatedData['alamat'];
        $user->role = $validatedData['role'];
        $user->save();
    
        return redirect()->back()->with('success', 'Data berhasil diperbarui.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    
        return redirect('/petugas')->with('success', 'Buku Telah Dihapus');
    }
}
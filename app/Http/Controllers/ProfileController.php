<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $user = user::findOrFile($id);
        return view('profile');
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatedata(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'namalengkap' => 'required|string|max:255',
            'alamat' => 'required|string',
            'role' => 'required|in:peminjam,petugas,admin',
        ]);
    
        $user = User::findOrFail($id);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->namalengkap = $request->namalengkap;
        $user->alamat = $request->alamat;
        $user->role = $request->role;
        $user->save();
    
        return redirect('/users')->with('success', 'User updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

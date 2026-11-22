<?php

namespace App\Http\Controllers;

use App\Models\ulasan;
use App\Http\Requests\StoreulasanRequest;
use App\Http\Requests\UpdateulasanRequest;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function buatKomentar(Request $request, $id)
     {
        // dd($request->all());
         $comment = New ulasan;
         $comment->ulasan = $request->ulasan;
         $comment->id_users = auth()->user()->id;
         $comment->buku_id= $id;
         $comment->save();
 
         return back()->with('success', 'komentar berhasil..');
     }

    public function index()
    {
        //
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
    public function store(StoreulasanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ulasan $ulasan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ulasan $ulasan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateulasanRequest $request, ulasan $ulasan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ulasan $ulasan)
    {
        //
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    // protected $fillable = ['judul','penulis', 'penerbit', 'tahunTerbit', 'gambar', 'kategori', 'deskripsi'];

    protected $table = 'bukus';
    


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ulasan()
    {
        return $this->hasMany(ulasan::class);
    }

    // public function kategori()
    // {
    //     return $this->belongsTo(kategori::class, 'id_kategori');
    // }
}

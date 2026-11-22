<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_users',
        'buku_id',
        'tanggalpeminjaman',
        'tanggalpengembalian',
        'statuspeminjaman',
    ];

    // Relationship with User model
    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }

    // Relationship with Buku model
    public function buku()
    {
        return $this->belongsTo(Buku::class, 'buku_id');
    }
}
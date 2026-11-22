<?php

namespace App\Models;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBukuRelasi extends Model
{
    use HasFactory;
    protected $table = "kategoribuku_relasi";
    protected $fillable = ["kategori_id","buku_id"];
}
// Controller
// root 
// modell 
// migration 
// frontend 
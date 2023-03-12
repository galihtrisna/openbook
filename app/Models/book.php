<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'cover',
        'ebook',
        'tahun',
        'penulis',
        'penerbit',
        'kategori',
        'sinopsis',
        'jumlah_halaman',
        'ISBN'
    ];
}

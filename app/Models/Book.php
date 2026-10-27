<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'buku_0114';
    protected $primaryKey = 'id_0114';

    protected $fillable = [
        'judul_0114',
        'isbn_0114',
        'tahun_terbit_0114',
        'pengarang_0114',
        'kategori_0114',
    ];
}
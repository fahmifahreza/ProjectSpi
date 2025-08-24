<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'beritas'; // nama tabel di database
    protected $fillable = ['judul', 'isi', 'gambar', 'tanggal'];
}


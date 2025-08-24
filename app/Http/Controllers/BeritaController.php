<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    // Halaman semua berita
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('berita', compact('beritas'));
    }

    // Halaman detail berita
    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('detail-berita', compact('berita'));
    }
}

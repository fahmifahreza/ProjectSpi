<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class LandingPageController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->take(3)->get(); // 3 berita terbaru
        return view('LandingPages', compact('beritas'));
    }
}

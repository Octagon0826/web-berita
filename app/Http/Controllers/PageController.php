<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function home()
{
    $articles = \App\Models\Article::with(['category', 'tags', 'user'])
        ->latest()
        ->get();

    return view('home', compact('articles'));
}
    public function profil()
    {
        return view('profil');
    }

    public function produk()
    {
        return view('produk');
    }

    public function kontak()
    {
        return view('kontak');
    }
}
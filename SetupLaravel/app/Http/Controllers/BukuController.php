<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        return view('buku.index', compact('bukus'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|digits:4',
        ]);

        Buku::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tahun_terbit' => $request->tahun_terbit,
        ]);

        return redirect('/buku');
    }
}

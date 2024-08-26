<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index ()
    {
        $beritas = Berita::orderBy('id', 'desc')->get();
        return view ('berita', compact('beritas'));
    }

    public function tambah ()
    {
        $beritas = Berita::orderBy('id', 'desc')->get();
        return view ('admin.tambahberita', compact('beritas'));
    }
    
    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('show', compact('berita'));
    }

    public function create()
    {
        return view('admin.tambahberita');
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
        ]);

        // Menyimpan gambar jika ada
        $path = null;
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('public/gambar');
        }

        // Menyimpan berita ke database
        Berita::create([
            'gambar' => $path,
            'judul' => $request->judul,
            'konten' => $request->konten,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil disimpan.');
    }

    public function delete($id)
    {
        $beritas = Berita::findOrFail($id)->delete();

        if ($beritas) {
            return redirect()->route('tambahberita.tam')->with('success', 'Berita Delete Successfully');
        } else {
            return redirect()->route('tambahberita.tam')->with('error', 'Berita Not Delete Successfully');
        }
    }

    public function edit($id)
    {
        $beritas = Berita::findOrFail($id);
        return view ('admin.beritaupdate', compact('beritas'));
    }

    public function update(Request $request, $id){
        $beritas = Berita::findOrFail($id);
        // $gambar = $request->gambar;
        $judul = $request->judul;
        $konten = $request->konten;

        // $beritas->gambar = $gambar;
        $beritas->judul = $judul;
        $beritas->konten = $konten;
        $data = $beritas->save();

        if ($data) {
            return redirect()->route('tambahberita.tam')->with('success', 'Berita Update Successfully');
        } else {
            return redirect()->route('tambahberita.update')->with('error', 'Some Problem occure');
        }

    }
}


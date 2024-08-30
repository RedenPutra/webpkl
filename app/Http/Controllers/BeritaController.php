<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->konten = $request->konten;

        // Menyimpan gambar jika ada   
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('public/gambar');
            $berita->gambar = str_replace('public/', 'storage/', $path);
        }
        $berita->save();
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

    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
        ]);

        $beritas = Berita::findOrFail($id);
        $beritas->judul = $request->judul;
        $beritas->konten = $request->konten;

        if($request->hasfile('gambar')) {
            if($beritas->gambar){
                Storage::delete('public/' . str_replace('storage/', '', $beritas->gambar));
            }
            $path = $request->file('gambar')->store('public/gambar');
            // Update nama file di database
            $beritas->gambar = str_replace('public/', 'storage/', $path);
        }
        $beritas->save();
        return redirect()->route('tambahberita.tam')->with('success', 'Berita berhasil diperbarui.');
    }
}


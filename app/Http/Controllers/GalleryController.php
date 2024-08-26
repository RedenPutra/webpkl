<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index ()
    {
        $gallerys = Gallery::all();
        return view ('gallery', compact('gallerys'));
    }

    public function tambah ()
    {
        $gallerys = Gallery::all();
        return view ('admin.tambahgallery', compact('gallerys'));
    }

    public function create()
    {
        return view('admin.tambahgallery');
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Menyimpan gambar jika ada
        $path = null;
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('public/gambar');
        }

        // Menyimpan gambar ke database
        Gallery::create([
            'foto' => $path,
        ]);

        return redirect()->route('gallery.index')->with('success', 'Gallery berhasil disimpan.');
    }

    public function delete($id)
    {
        $gallerys = Gallery::findOrFail($id)->delete();

        if ($gallerys) {
            return redirect()->route('tambahgallery.tam')->with('success', 'Gallery Delete Successfully');
        } else {
            return redirect()->route('tambahgallery.tam')->with('error', 'Gallery Not Delete Successfully');
        }
    }

    public function edit($id)
    {
        $gallerys = Gallery::findOrFail($id);
        return view ('admin.galleryupdate', compact('gallerys'));
    }

    public function update(Request $request, $id){
        $gallerys = Gallery::findOrFail($id);
        $foto = $request->foto;
       

        $gallerys->foto = $foto;
       
        $data = $gallerys->save();

        if ($data) {
            return redirect()->route('tambahgallery.tam')->with('success', 'Gallery Update Successfully');
        } else {
            return redirect()->route('tambahgallery.update')->with('error', 'Some Problem occure');
        }

    }
}

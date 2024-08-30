<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        $gallery = new Gallery();

        // Menyimpan gambar jika ada
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('public/foto');
            $gallery->foto = str_replace('public/', 'storage/', $path);
        }
        $gallery->save();
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

    public function update(Request $request, $id)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $gallerys = Gallery::findOrFail($id);

        if($request->hasfile('foto')) {
            if($gallerys->foto){
                Storage::delete('public/' . str_replace('storage/', '', $gallerys->foto));
            }
            $path = $request->file('foto')->store('public/foto');
            // Update nama file di database
            $gallerys->foto = str_replace('public/', 'storage/', $path);
        }
       $gallerys->save();
       return redirect()->route('tambahgallery.tam')->with('success', 'Gallery Update Successfully');
    }
}

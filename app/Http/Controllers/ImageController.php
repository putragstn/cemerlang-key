<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

//import Facade "Storage"
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('menu.gallery.image.index', [
            'title'     => 'Galeri Gambar',
            'images'    => Image::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.gallery.image.create', [
            'title' => 'Upload Gambar'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image_name' => 'required',
            // 'detail' => 'required',
            'filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        $input = $request->all();

        if ($image = $request->file('filename')) {
            $destinationPath = 'img/foto/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['filename'] = "$profileImage";
        }

        Image::create($input);

        return redirect()->route('gambar.index')
            ->with('success', 'Gambar berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('menu.gallery.image.edit', [
            'title' => 'Edit Gambar',
            'image' => Image::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image_name' => 'required',
            // 'detail' => 'required'
            'filename' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        $input = $request->all();

        // get data by ID
        $gambar = Image::find($id);

        // cek apakah gambar sudah diupload
        if (request()->hasFile('filename')) {

            // upload gambar baru
            if ($image = $request->file('filename')) {
                $destinationPath = 'img/foto/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['filename'] = "$profileImage";
            }

            // hapus gambar, jika gambar lama masih adas
            $image_path = public_path('img/foto/' . $gambar->filename);
            unlink($image_path);
        }

        $gambar->update($input);

        return redirect()->route('gambar.index')
            ->with('success', 'Gambar berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image, $id)
    {
        //get post by ID
        $gambar = Image::findOrFail($id);

        $image_path = public_path('img/foto/' . $gambar->filename);

        if (file_exists($image_path)) {
            unlink($image_path);
        }

        $gambar->delete();

        //redirect to index
        return redirect()->route('gambar.index')->with('success', 'Gambar Berhasil Dihapus!');
    }
}

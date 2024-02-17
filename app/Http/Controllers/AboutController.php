<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('menu.about-we.index', [
            'title' => 'Tentang Kami',
            'about' => About::find(1)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.about-we.create', [
            'title' => 'Tambah Tentang Kami'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'paragraf_1' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'img/foto/tentang-kami/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        About::create($input);

        return redirect()->route('tentang-kami.index')
            ->with('success', 'Tentang Kami berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about, $id)
    {
        $request->validate([
            'paragraf_1' => 'required',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        $input = $request->all();

        // get data by ID
        $about = About::find($id);

        // cek apakah gambar sudah diupload
        if (request()->hasFile('image')) {

            // upload gambar baru
            if ($image = $request->file('image')) {
                $destinationPath = 'img/foto/tentang-kami/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = "$profileImage";
            }

            // hapus gambar, jika gambar lama masih adas
            $image_path = public_path('img/foto/tentang-kami/' . $about->image);
            unlink($image_path);
        }

        $about->update($input);

        return redirect()->route('tentang-kami.index')
            ->with('success', 'Tentang Kami berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}

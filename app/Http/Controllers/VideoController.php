<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('menu.gallery.video.index', [
            'title'     => 'Galeri Video',
            'videos'    => Video::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.gallery.video.create', [
            'title' => 'Upload Video'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'video_name' => 'required',
            // 'detail' => 'required',
            'video' => 'required|max:50000',
        ]);

        $input = $request->all();

        if ($video = $request->file('video')) {
            $destinationPath = 'video/';
            $profileVideo = date('YmdHis') . "." . $video->getClientOriginalExtension();
            $video->move($destinationPath, $profileVideo);
            $input['video'] = "$profileVideo";
        }

        Video::create($input);

        return redirect()->route('video.index')
            ->with('success', 'Video berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        return view('menu.gallery.video.edit', [
            'title' => 'Edit Video',
            'video' => Video::find($video->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        $request->validate([
            'video_name' => 'required',
            // 'detail' => 'required'
            'video' => 'max:50000',
        ]);

        $input = $request->all();

        // get data by ID
        // $gambar = Video::find($video->id);
        $vidio = Video::find($video->id);

        // cek apakah gambar sudah diupload
        if (request()->hasFile('video')) {

            // upload gambar baru
            if ($movie = $request->file('video')) {
                $destinationPath = 'video/';
                $profileVideo = date('YmdHis') . "." . $movie->getClientOriginalExtension();
                $movie->move($destinationPath, $profileVideo);
                $input['video'] = "$profileVideo";
            }

            // hapus gambar, jika gambar lama masih adas
            $video_path = public_path('video/' . $vidio->video);
            unlink($video_path);
        }

        // update data video
        $vidio->update($input);

        return redirect()->route('video.index')
            ->with('success', 'Gambar berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        //get post by ID
        // $gambar = Video::findOrFail($id);

        $video_path = public_path('video/' . $video->video);

        if (file_exists($video_path)) {
            unlink($video_path);
        }

        $video->delete();

        //redirect to index
        return redirect()->route('video.index')->with('success', 'Video Berhasil Dihapus!');
    }
}

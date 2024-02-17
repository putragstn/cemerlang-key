<?php

namespace App\Http\Controllers;

use App\Models\OtherService;
use Illuminate\Http\Request;

class OtherServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('menu.other-service.index', [
            'title'         => 'Layanan Lainnya',
            'otherServices' => OtherService::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.other-service.create', [
            'title' => 'Tambah Layanan Lainnya'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'jenis_layanan' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'img/foto/layanan-lainnya/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        OtherService::create($input);

        return redirect()->route('layanan-lainnya.index')
            ->with('success', 'Layanan lainnya berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(OtherService $otherService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OtherService $otherService, $id)
    {
        return view('menu.other-service.edit', [
            'title'    => 'Ubah Layanan Lainnya',
            'service'  => OtherService::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OtherService $otherService, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'jenis_layanan' => 'required',
        ]);

        $input = $request->all();

        // get data by ID
        $service = OtherService::find($id);

        // cek apakah gambar sudah diupload
        if (request()->hasFile('image')) {

            // upload gambar baru
            if ($image = $request->file('image')) {
                $destinationPath = 'img/foto/layanan-lainnya/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = "$profileImage";
            }

            // hapus gambar, jika gambar lama masih adas
            $image_path = public_path('img/foto/layanan-lainnya/' . $service->image);
            unlink($image_path);

            $service->update($input);
        }

        return redirect()->route('layanan-lainnya.index')
            ->with('success', 'Layanan lainnya berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OtherService $otherService, $id)
    {
        //get post by ID
        $service = OtherService::find($id);

        $image_path = public_path('img/foto/layanan-lainnya/' . $service->image);

        if (file_exists($image_path)) {
            unlink($image_path);
        }

        $service->delete();

        //redirect to index
        return redirect()->route('layanan-lainnya.index')->with('success', 'Layanan lainnya berhasil dihapus!');
    }
}

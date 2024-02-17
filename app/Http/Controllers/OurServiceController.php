<?php

namespace App\Http\Controllers;

use App\Models\OurService;
use Illuminate\Http\Request;

class OurServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('menu.our-service.index', [
            'title'         => 'Layanan Kami',
            'ourServices'   => OurService::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.our-service.create', [
            'title' => 'Tambah Layanan Kami'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis_layanan' => 'required',
            'deskripsi'     => 'required'
        ]);

        $input = $request->all();

        OurService::create($input);

        return redirect()->route('layanan-kami.index')
            ->with('success', 'Layanan kami berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(OurService $ourService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OurService $ourService, $id)
    {
        return view('menu.our-service.edit', [
            'title'    => 'Ubah Layanan Kami',
            'service'  => OurService::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OurService $ourService, $id)
    {
        $request->validate([
            'jenis_layanan' => 'required',
            'deskripsi'     => 'required'
        ]);

        $input = $request->all();

        // get data by ID
        $service = OurService::find($id);

        $service->update($input);

        return redirect()->route('layanan-kami.index')
            ->with('success', 'Layanan kami berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OurService $ourService, $id)
    {
        //get post by ID
        $service = OurService::find($id);

        $service->delete();

        //redirect to index
        return redirect()->route('layanan-kami.index')->with('success', 'Layanan kami berhasil dihapus!');
    }
}

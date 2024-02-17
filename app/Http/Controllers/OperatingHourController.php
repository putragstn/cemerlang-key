<?php

namespace App\Http\Controllers;

use App\Models\OperatingHour;
use Illuminate\Http\Request;

class OperatingHourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('menu.jam-operasional.index', [
            'title' => 'Jam Operasional',
            'days' => OperatingHour::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.jam-operasional.create', [
            'title' => 'Tambah Jam Operasional'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'hari' => 'required',
            // 'jam_buka'     => 'required'
        ]);

        $input = $request->all();

        OperatingHour::create($input);

        return redirect()->route('jam-operasional.index')
            ->with('success', 'Jam Operasional berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(OperatingHour $operatingHour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OperatingHour $operatingHour, $id)
    {
        return view('menu.jam-operasional.edit', [
            'title' => 'Ubah Jam Operasional',
            'day'   => OperatingHour::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OperatingHour $operatingHour, $id)
    {
        $request->validate([
            'hari'     => 'required'
        ]);

        $input = $request->all();

        // get data by ID
        $day = OperatingHour::find($id);

        $day->update($input);

        return redirect()->route('jam-operasional.index')
            ->with('success', 'Jam Operasional berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OperatingHour $operatingHour, $id)
    {
        //get post by ID
        $day = OperatingHour::find($id);

        $day->delete();

        //redirect to index
        return redirect()->route('jam-operasional.index')->with('success', 'Jam Operasional berhasil dihapus!');
    }
}

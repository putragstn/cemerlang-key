<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('menu.kontak.index', [
            'title'     => 'Informasi Kontak & Media Sosial',
            'contact'  => Contact::find(1)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.kontak.create', [
            'title'     => 'Tambah Informasi Kontak & Media Sosial',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact, $id)
    {
        return view('menu.kontak.edit', [
            'title'     => 'Informasi Kontak & Media Sosial',
            'contact'   => Contact::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact, $id)
    {
        $request->validate([
            'telepon'           => 'required',
            'email'             => 'required',
            'no_whatsapp'       => 'required',
            'link_whatsapp'     => 'required',
            'nama_facebook'     => 'required',
            'link_facebook'     => 'required',
            'nama_instagram'    => 'required',
            'link_instagram'    => 'required',
            'lokasi'            => 'required',
            'link_lokasi'       => 'required'
        ]);

        $input = $request->all();

        // get data by ID
        $contact = Contact::find($id);

        $contact->update($input);

        return redirect()->route('kontak.index')
            ->with('success', 'Informasi Kontak/Media Sosial berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}

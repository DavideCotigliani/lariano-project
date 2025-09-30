<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attrazione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AttrazioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attrazioni = Attrazione::all();
        return view("attrazioni.index", compact("attrazioni"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Attrazione $attrazione)
    {
        return view("attrazioni.show", compact("attrazione"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attrazione $attrazione)
    {
        return view("attrazioni.edit", compact("attrazione"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attrazione $attrazione)
    {
        $data = $request->all();
        $attrazione->nome = $data['nome'];
        $attrazione->descrizione = $data['descrizione'];
        $attrazione->categoria = $data['categoria'];
        $attrazione->latitudine = $data['latitudine'];

        $attrazione->longitudine = $data['longitudine'];

        // Carico l'immagine solo se presente
        if ($request->hasFile('image')) {
            // se c'è già un'immagine, eliminiamola
            if ($attrazione->image) {
                Storage::delete($attrazione->image);
            }

            // salva la nuova immagine sul disco "public"
            $img_url = $request->file('image')->store('attrazioni', 'public');
            $attrazione->image = $img_url;
        }

        $attrazione->update();
        return redirect()->route("attrazioni.show", $attrazione);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

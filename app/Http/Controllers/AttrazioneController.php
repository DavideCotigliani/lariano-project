<?php

namespace App\Http\Controllers;

use App\Models\Attrazione;
use Illuminate\Http\Request;

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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

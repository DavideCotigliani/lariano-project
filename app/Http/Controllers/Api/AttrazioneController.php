<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Attrazione;
use Illuminate\Http\Request;

class AttrazioneController extends Controller
{
    public function index()
    {
        $attrazioni = Attrazione::all();

        // aggiungi image_url per ogni libro
        // $videogames->each(function ($videogame) {
        //     $videogame->image_url = $videogame->image ? asset('storage/' . $videogame->image) : null;
        // });

        return response()->json(
            ["success" => true,
            "data" => $attrazioni]
        );
    }

    public function show(Attrazione $attrazione)
    {

        // // aggiungi un campo image_url per React
        // $videogame->image_url = $videogame->image ? asset('storage/' . $videogame->image) : null;

        return response()->json([
            "success" => true,
            "data" => $attrazione
        ]);
    }
}

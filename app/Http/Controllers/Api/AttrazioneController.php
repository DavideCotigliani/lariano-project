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

        // aggiungi image_url per ogni attrazione
        $attrazioni->each(function ($attrazione) {
            $attrazione->image_url = $attrazione->image ? asset('storage/' . $attrazione->image) : null;
        });

        return response()->json(
            ["success" => true,
            "data" => $attrazioni]
        );
    }

    public function show(Attrazione $attrazione)
    {

        // // aggiungi un campo image_url per React
        $attrazione->image_url = $attrazione->image ? asset('storage/' . $attrazione->image) : null;

        return response()->json([
            "success" => true,
            "data" => $attrazione
        ]);
    }
}

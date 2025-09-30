<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();

        // aggiungi image_url per ogni libro
        // $videogames->each(function ($videogame) {
        //     $videogame->image_url = $videogame->image ? asset('storage/' . $videogame->image) : null;
        // });

        return response()->json(
            ["success" => true,
            "data" => $events]
        );
    }

    public function show(Event $event)
    {

        // // aggiungi un campo image_url per React
        // $videogame->image_url = $videogame->image ? asset('storage/' . $videogame->image) : null;

        return response()->json([
            "success" => true,
            "data" => $event
        ]);
    }
}

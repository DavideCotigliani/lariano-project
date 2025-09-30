<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();

        // aggiungi image_url per ogni libro
        // $videogames->each(function ($videogame) {
        //     $videogame->image_url = $videogame->image ? asset('storage/' . $videogame->image) : null;
        // });

        return response()->json(
            ["success" => true,
            "data" => $restaurants]
        );
    }

    public function show(Restaurant $restaurant)
    {

        // // aggiungi un campo image_url per React
        // $videogame->image_url = $videogame->image ? asset('storage/' . $videogame->image) : null;

        return response()->json([
            "success" => true,
            "data" => $restaurant
        ]);
    }
}

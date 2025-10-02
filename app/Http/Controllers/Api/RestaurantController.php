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
        $restaurants->each(function ($restaurant) {
            $restaurant->image_url = $restaurant->image ? asset('storage/' . $restaurant->image) : null;
        });

        return response()->json(
            ["success" => true,
            "data" => $restaurants]
        );
    }

    public function show(Restaurant $restaurant)
    {

        // // aggiungi un campo image_url per React
        $restaurant->image_url = $restaurant->image ? asset('storage/' . $restaurant->image) : null;

        return response()->json([
            "success" => true,
            "data" => $restaurant
        ]);
    }
}

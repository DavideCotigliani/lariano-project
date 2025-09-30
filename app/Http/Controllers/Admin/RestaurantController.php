<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurants = Restaurant::all();
        return view("restaurants.index", compact("restaurants"));
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
    public function show(Restaurant $restaurant)
    {
        return view("restaurants.show", compact('restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
        return view("restaurants.edit", compact("restaurant"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Restaurant $restaurant)
    {

        $data = $request->all();
        $restaurant->name = $data['name'];
        $restaurant->address = $data['address'];
        $restaurant->phone = $data['phone'];
        $restaurant->latitude = $data['latitude'];
        $restaurant->longitude = $data['longitude'];


        // Carico l'immagine solo se presente
        if ($request->hasFile('image')) {
            // se c'è già un'immagine, eliminiamola
            if ($restaurant->image) {
                Storage::delete($restaurant->image);
            }

            // salva la nuova immagine sul disco "public"
            $img_url = $request->file('image')->store('restaurants', 'public');
            $restaurant->image = $img_url;
        }

        $restaurant->update();
        return redirect()->route("restaurants.show", $restaurant);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

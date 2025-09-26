<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $restaurants = [
            [
                'name' => 'Premiata Trattoria Prati',
                'address' => 'Via Dante Alighieri, 28, 00076 Lariano (RM)',
                'phone' => '06 9655213',
                'latitude' => '41.7239',
                'longitude' => '12.8305',
            ],
            [
                'name' => 'Ristorante Nespolo D\'Oro',
                'address' => 'Via Giuseppe Garibaldi, 76/A, 00076 Lariano (RM)',
                'phone' => '06 9648170',
                'latitude' => '41.7241',
                'longitude' => '12.8307',
            ],
            [
                'name' => 'Il Bersagliere',
                'address' => 'Via Sandro Pertini, 10, 00076 Lariano (RM)',
                'phone' => '06 9655028',
                'latitude' => '41.7238',
                'longitude' => '12.8306',
            ],
            [
                'name' => 'Al Ponte',
                'address' => 'Piazzale Brass Luigi, 25, 00076 Lariano (RM)',
                'phone' => '06 97609270',
                'latitude' => '41.7243',
                'longitude' => '12.8308',
            ],
            [
                'name' => 'I Candelabri',
                'address' => 'Piazza Santa Eurosia, 29, 00076 Lariano (RM)',
                'phone' => '06 96498172',
                'latitude' => '41.7244',
                'longitude' => '12.8309',
            ],
            [
                'name' => 'Del Fattore',
                'address' => 'Piazza Santa Eurosia, 29, 00076 Lariano (RM)',
                'phone' => '06 96498113',
                'latitude' => '41.7245',
                'longitude' => '12.8310',
            ],
            [
                'name' => 'La Quercia Ricevimenti',
                'address' => 'Piazza Santa Eurosia, 29, 00076 Lariano (RM)',
                'phone' => '348 6720299',
                'latitude' => '41.7246',
                'longitude' => '12.8311',
            ],
            [
                'name' => 'Osteria Da Nonna Anna',
                'address' => 'Via Napoli, 53/57, 00076 Lariano (RM)',
                'phone' => '06 9655555',
                'latitude' => '41.7247',
                'longitude' => '12.8312',
            ],
            [
                'name' => 'Il Teatro del Gusto',
                'address' => 'Via Colle Cagioli, 139, 00076 Lariano (RM)',
                'phone' => '06 96490006',
                'latitude' => '41.7248',
                'longitude' => '12.8313',
            ],
            [
                'name' => 'Ristorante Pizzeria da Francone',
                'address' => 'Via Roma, 368, 00076 Lariano (RM)',
                'phone' => '069647188',
                'latitude' => '41.70859444208365',
                'longitude' => '12.813292664411625',
            ],
        ];
        foreach ($restaurants as $restaurant) {
            $newRestaurant = new Restaurant();
            $newRestaurant->name = $restaurant['name'];
            $newRestaurant->address = $restaurant['address'];
            $newRestaurant->phone = $restaurant['phone'];
            $newRestaurant->latitude = $restaurant['latitude'];

            $newRestaurant->longitude = $restaurant['longitude'];

            $newRestaurant->save();

        }

    }
}

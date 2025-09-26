<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $events = [
            [
                'title' => 'Cellittata Larianese',
                'description' => 'Un festival che celebra i "cellitti", una pasta fresca locale, con stand gastronomici, musica dal vivo e la possibilità di partecipare a escursioni nel Parco Regionale dei Castelli Romani.',
                'start_date' => '2025-07-03',
                'end_date'   => '2025-07-06',
                'immagini'   => json_encode([]),
            ],
            [
                'title' => 'Bosco DiVino',
                'description' => "Un evento immerso nel Parco dell'Ontanese, con degustazioni di circa 70 vini locali e nazionali, accompagnati da prelibatezze gastronomiche.",
                'start_date' => '2025-07-17',
                'end_date'   => '2025-07-20',
                'immagini'   => json_encode([]),
            ],
            [
                'title' => 'Sagra del Fungo Porcino',
                'description' => 'La 33ª edizione di un appuntamento molto atteso nei Castelli Romani, con stand gastronomici, piatti tradizionali a base di funghi, musica e spettacoli di grandi artisti italiani.',
                'start_date' => '2025-09-10',
                'end_date'   => '2025-09-21',
                'immagini'   => json_encode([]),
            ],
            [
                'title' => 'Batterie in Piazza',
                'description' => 'Un evento di musica e solidarietà che ha visto protagonista Dario Tanghetti, percussionista di Eros Ramazzotti, con l\'obiettivo di raccogliere fondi per l\'AIL Roma.',
                'start_date' => '2025-05-23',
                'end_date'   => '2025-05-23',
                'immagini'   => json_encode([]),
            ],
            [
                'title' => 'Cinema con le Stelle',
                'description' => 'Un evento gratuito per l\'estate, incluso nel programma "E... State a Lariano", con proiezioni cinematografiche all\'aperto.',
                'start_date' => '2025-06-15',
                'end_date'   => '2025-08-31',
                'immagini'   => json_encode([]),
            ],
        ];
        foreach ($events as $event) {
            $newEvent = new Event();
            $newEvent->title = $event['title'];

            $newEvent->description = $event['description'];


            $newEvent->start_date = $event['start_date'];
            $newEvent->end_date = $event['end_date'];

            $newEvent->immagini = $event['immagini'];
            $newEvent->save();

        }

    }
}

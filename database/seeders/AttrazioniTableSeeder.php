<?php

namespace Database\Seeders;

use App\Models\Attrazione;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttrazioniTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attrazioni = [[
            'nome' => 'Chiesa Parrocchiale Santa Maria Intemerata',
            'descrizione' => 'Già nel 1785, su richiesta dei coloni, era stata realizzata una cappella rurale dedicata alla Madonna del Buon Consiglio. Questa piccola struttura, che misurava appena 7×3,5 metri, risultava però del tutto insufficiente a soddisfare le esigenze di una popolazione in crescita. Inoltre, un luogo di culto così angusto non poteva ospitare un curato e le funzioni religiose erano limitate alle giornate festive. In tale situazione, l’assistenza spirituale era del tutto assente, e addirittura i coloni “per il lungo abbandono, si erano come inselvatichiti”. Il cardinale Leonardo Antonelli, Governatore di Velletri, era ben consapevole della situazione locale: nel suo testamento, datato 30 luglio 1809, dispose quindi un generoso lascito di mille scudi allo scopo di edificare una chiesa parrocchiale a Lariano. Trascorso il periodo di annessione all’impero francese (1809-14), l’amministrazione veliterna, con atto consiliare del 14 settembre 1814, decise la realizzazione della nuova chiesa. Il 19 luglio 1815, la cancelleria vescovile affidò l’incarico al mastro muratore Marco Scipioni, che iniziò la costruzione su un terreno contiguo agli edifici denominati “Granai e casetta del Guardiano”.
La fabbrica della chiesa, fra difficoltà e ritardi, si protrasse per diversi anni. Nel Catasto Gregoriano (1819-20), l’edificio è tuttavia già presente sotto la denominazione di “Chiesa sotto il titolo della Madonna delle Grazie”. Anche se i lavori non erano ancora conclusi, la parrocchia entrò in funzione il 15 gennaio 1828 quando “compita la Chiesa e Casa Parrocchiale il primo Parroco prese possesso”. La chiesa aveva nel frattempo assunto il titolo di “Santa Maria Intemerata”, in quanto conservava un antico dipinto murale che proveniva dall’omonima chiesa di via Lata, che era stata danneggiata da un terremoto nel 1706. Vi erano inoltre due altari laterali: uno dedicato a San Giuseppe, con statua lignea, l’altro a Santa Eurosia. L’intero edificio misurava 16 metri di lunghezza per 9 di larghezza.
Don Giacinto De Pascalis, il primo parroco, fu nominato dal cardinale Giulio Maria della Somaglia. Al suo arrivo, scrisse in una lettera: “in questa parrocchia rurale, trovo cotesti arianesi immersi nella più cupa ignoranza della dottrina cristiana”. Tuttavia, in seguito ricordava che “con l’aiuto dell’altissimo, Orante incominciò a istruirli nella via cristiana… cosicché da quell’epoca ad oggi, è quasi tutto cambiato”. Don Giacinto restò parroco fino al 1833. A lui seguirono molti altri: alcuni furono poco più che comparse, altri furono molto amati e benvoluti dalla popolazione. Uno di questi fu don Aurelio Pieroni, parroco dal 1885 al 1892, che fu un testimone appassionato delle miserie dei contadini della zona. Degni di nota furono don Celestino Amati e don Temistocle Zaralli, l’ultimo ad ereditare l’antica chiesa. L’edificio ecclesiastico, già in una situazione precaria all’epoca di don Aurelio, fu più volte restaurato. Costruito per una popolazione poco numerosa, risultava però del tutto insufficiente per i 2816 abitanti larianesi del 1936. In questo contesto giunse il secondo conflitto mondiale, che devastò il nostro territorio fino al maggio 1944. I danni riportati dalla vecchia chiesa risultarono ingentissimi, tanto che si decise per la sua demolizione, vista anche l’impossibilità di eseguire gli ampliamenti necessari. La struttura fu rasa al suolo, lasciando posto al “Palazzo dei Beni Demaniali”, un edificio più utile che bello tipico del suo tempo. La nuova chiesa di Santa Maria Intemerata fu edificata a pochi metri di distanza ed inaugurata nel 1950.',
        'categoria' => "Architettura religiosa",
        'latitudine' => '41.727360678415366',
        'longitudine' => '12.8335550533244',
        ],
        [
            'nome' => 'Chiesa della Madonna del Buon Consiglio',
            'descrizione' => 'Possiamo, ritengo, riferire questo carteggio alla piccola chiesetta della Madonna del Buon Consiglio che come riportato a pag. 150 del volume di D. Fernando De Mei, "La Terra di Lariano e le sue Chiese", edito a Lariano net 1984, venne edificata nel 1785 sul Colle Mastrangeli o Cupellone. Ci vollero quindi ben undici anni prima che questa chiesetta venisse costruita e, in ogni caso, fin quando, molti anni dopo, non entrò in fiurzione la chiesa parrocchiale, rappresentò l’unico edificio dedicato al culto nella "Tenuta del Lariano". Probabilmente un sacerdote di Velletri si recava la Domenica e le altre feste comandate a celebrare la Messa, evitando così agli abitanti det luogo il lungo tragitto fino alla città.
Nel succitato libro esiste anche un bel disegno del bravo artista veliterno Aldo Cupellaro che rappresenta la Chiesetta della Madonna del Buon Consiglio.',
        'categoria' => "Architettura religiosa",
        'latitudine' => '41.71926215087095',
        'longitudine' => '12.84246033625878',
        ],
        [
            'nome' => 'Maschio dell’Ariano',
            'descrizione' => 'Si ritiene corrisponda al Mons Algidus degli antichi Romani, una località molto importante per il controllo del territorio latino e di quello degli Equi e dei Volsci. Sul monte esisteva un antico castello di epoca repubblicana la cui edificazione è attribuita alla gens romana Aria (o Arria). Il castello Arianus avrebbe dato il nome anche alla vicina località di Lariano; tuttavia in un documento del 1064 il castello è citato come Algidus, mentre il toponimo Lariano è attestato soltanto a partire dal 1171. Il castello fu comunque distrutto e incendiato nel 1436.
Un’ipotesi alternativa attribuisce il nome del monte, e quindi il nome della località di Lariano, a una ara Jani, (letteralmente altare di Giano) un antico tempio costruito dai Romani in onore di Giano, benché di tale tempio non vi sia alcuna traccia archeologica o documentale.',
        'categoria' => "Aree naturali",
        'latitudine' => '41.74117144765277',
        'longitudine' => '12.793244489716628',
        ],
        [
            'nome' => 'Parco regionale dei Castelli Romani',
            'descrizione' => 'Il parco è un Ente della Regione Lazio. È organizzato con vari organi istituzionali: Presidente, Consiglio direttivo, Comunità del parco, Collegio dei Revisori dei conti. L ’organizzazione è affidata a un Direttore Generale che coordina l’attività dei diversi uffici e dei Guardiaparco. Questa foresta di interesse naturalistico e artistico si estende nell’area dell’antico Vulcano Laziale. 
            Molti dei comuni dei Castelli Romani condividono aree protette del parco, tra cui spicca Nemi, il cui territorio ricade per intero entro la sua delimitazione.
Di interesse particolare sono il sito archeologico di Tuscolo, come anche le numerose ville tuscolane. Del parco fanno parte anche il lago Albano (detto anche impropriamente lago di Castel Gandolfo), il lago di Nemi e da ultimo anche la Riserva naturale della Sughereta di Pomezia.',
        'categoria' => "Aree naturali",
        'latitudine' => '41.7643129445996',
        'longitudine' => '12.708158697859838',
        ],
        [
            'nome' => 'Museo archeologico',
            'descrizione' => 'Tra le scoperte più notevoli, il completo funerario della tomba principesca di Colle Mozzo a lariano, a testimonianza della presenza di personaggi importanti appartenenti a classi abbienti.',
        'categoria' => "Cultura",
        'latitudine' => '41.72817604559985',
        'longitudine' => '12.833293228382473',
        ],
    ];

        foreach ($attrazioni as $attrazione) {
            $newAttrazione = new Attrazione();
            $newAttrazione->nome = $attrazione['nome'];

            $newAttrazione->descrizione = $attrazione['descrizione'];

            $newAttrazione->categoria = $attrazione['categoria'];
            $newAttrazione->latitudine = $attrazione['latitudine'];

            $newAttrazione->longitudine = $attrazione['longitudine'];
            $newAttrazione->save();

        }
    }
}

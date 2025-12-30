<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiziController extends Controller
{

    public function servizi()
    {

        $servizi = [

            ['tipo' => 'Guide e Tutorial', 'category' => 'Campagna, multiplayer, modalità Forge', 'img' => 'media/servizi/01-tutorial.png'],
            ['tipo' => 'Trucchi e consigli', 'category' => "Migliora l'esperienza di gioco", 'img' => 'media/servizi/02-trucchi.png'],
            ['tipo' => 'Contenuti Multimediali', 'category' => "Video GamePlay, clip, interviste", 'img' => 'media/servizi/03-multimedia.png'],

        ];
        return view('pag_servizi', ['all_service' => $servizi]);
    }

    // questo parametro è il segnaposto presente nella route in pag_servizi.blade.php
    public function dettaglioService($tipo)
    {

        // dd($tipo);

        $servizi = [

            ['tipo' => 'Guide e Tutorial', 'category' => 'Campagna, multiplayer, modalità Forge', 'img' => 'media/servizi/01-tutorial.png'],
            ['tipo' => 'Trucchi e consigli', 'category' => "Migliora l'esperienza di gioco", 'img' => 'media/servizi/02-trucchi.png'],
            ['tipo' => 'Contenuti Multimediali', 'category' => "Video GamePlay, clip, interviste", 'img' => 'media/servizi/03-multimedia.png'],

        ];

        foreach ($servizi as $servizio) {

            if ($tipo == $servizio['tipo']) {

                //  stabilisco il nome della views ...blade.php
                return view('Servizi/pagDettaglioServ' , ['servizio' => $servizio]  ) ;
                // dopo aver predispsoto questa funzione, creo il file pagDettaglioServ.blade.php in views

            }
        }
    }
}

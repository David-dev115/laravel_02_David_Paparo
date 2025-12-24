<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage () {
    $title = "IL CODICE DEGLI SPARTAN";
    $title2 = "Storia, lore e segreti dell’universo Halo";
    return view('welcome' , ['titolo' => $title , 'titolo2' => $title2]);
    }


    public function personaggi () {
    $personages = [
        ['name' => 'Master Chief' , 'role' => 'Soldato'],
        ['name' => 'Cortana' , 'role' => 'IA'],
        ['name' => 'Capitano Keyes' , 'role' => 'Ufficiale'],

    ];
    return view('protagonisti', ['personaggi' => $personages]);
    }


    public function servizi () {

    $servizi = [

        ['tipo' => 'Guide e Tutorial' , 'category' => 'campagna, multiplayer, modalità Forge' , 'img' => 'media/servizi/01-tutorial.png' ],
        ['tipo' => 'Trucchi e consigli' , 'category' => "migliora l'esperienza di gioco" , 'img' => 'media/servizi/02-trucchi.png'],
        ['tipo' => 'Contenuti Multimediali' , 'category' => "Video GamePlay, clip, interviste" , 'img' => 'media/header_2.png' ],

    ];
    return view ('pag_servizi' , ['all_service' => $servizi  ]);   


    }



}

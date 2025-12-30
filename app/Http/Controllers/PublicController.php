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






}

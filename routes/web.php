<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PublicController;
use \App\Http\Controllers\ServiziController;

         //controller di riferimento     Nome Funzione
Route::get('/', [PublicController::class, 'homepage']) ->name('home')  ;


            //  uri
Route::get('/protagonisti', [PublicController::class, 'personaggi']) ->name('people')  ;


                                                                    // etichetta
Route::get( '/servizi' , [ServiziController::class, 'servizi'] ) ->name('service')  ;


                              // segnaposto per sfruttare la rotta parametrica ( è un parametro che sfrutto nella route nel file pag_servizi.blade.php )
Route::get( '/servizi/dettaglio/{segnaposto}' , [ServiziController::class , 'dettaglioService']) ->name('serviceDett')  ;
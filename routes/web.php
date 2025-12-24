<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PublicController;

Route::get('homepage', [PublicController::class, 'homepage']) ->name('home')  ;

Route::get('/protagonisti', [PublicController::class, 'personaggi']) ->name('people')  ;

Route::get( '/servizi' , [PublicController::class, 'servizi'] ) ->name('service')  ;

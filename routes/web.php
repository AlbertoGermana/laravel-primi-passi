<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  $variabile = "Questa è la pagina Index";
    return view('index', compact('variabile'));
});

Route::get('/about', function () {
  $variabile = "Questa è la pagina About";
    return view('index', compact('variabile'));
});

Route::get('/contatti', function () {
  $variabile = "Questa è la pagina Contatti";
    return view('index', compact('variabile'));
});

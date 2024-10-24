<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('testezinho');
});

Route::get('/', function () {
    return view('welcome');
});

Route::resource(name:'produtos',controller:'ProdutoController'::class);

<?php

use Illuminate\Support\Facades\Route;

// Route::post('/teams','TeamController@index');
Route::get('/', function () {
    return view('welcome');
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//artist index
Route::get('/home', function () {
    return view('customer.index');
});

// artist create artwork
Route::get('/artist/create', function () {
    return view('artist.createartwork');
});
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//customer index
Route::get('/home', function () {
    return view('customer.index');
});

//customer cart
Route::get('/cart', function () {
    return view('customer.cartform');
});


// artist create artwork
Route::get('/artist/create', function () {
    return view('artist.createartwork');
});

Route::get('/artist/dashboard', function () {
    return view('artist.artistdashboard');
});

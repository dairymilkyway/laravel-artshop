<?php
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});
//login
Route::get('/login', function () {
    return view('account.login');
});
Route::get('/register', function () {
    return view('account.customerregister');
});
Route::get('/registerartist', function () {
    return view('account.artistregister');
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

// artwork dashboard
Route::get('/artist/dashboard', function () {
    return view('artist.artistdashboard');
});

//register na may database
Route::post('/register', [AuthController::class, 'register'])->name('register');
//login na may database (di gumagana login logic taga show lang sya ng website)
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');


Route::get('verify/{token}', [AuthController::class, 'verify']);
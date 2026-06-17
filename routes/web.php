<?php

use Illuminate\Support\Facades\Route;

// Hamara custom landing page route
Route::get('/', function () {
    return view('frontend.home');
});

// Baqi jo Breeze ke auth routes niche likhe hain, unhe waise hi rehne dein:
require __DIR__ . '/auth.php';

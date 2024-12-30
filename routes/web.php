<?php

use Illuminate\Support\Facades\Route;

// Route ke halaman home
Route::get('/', function () {
    return view('home');
})->name('home');

// Route ke halaman commodity
Route::get('/commodity', function () {
    return view('commodity');
})->name('commodity');
